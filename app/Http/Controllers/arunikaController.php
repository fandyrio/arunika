<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Publish_artikel;
use App\Keyword;
use App\Issue_artikel;
use App\Statistik_baca;
use File;
use App\Kategori_artikel;
use App\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Validation\ValidationException;

class arunikaController extends Controller
{
    public function index(){
        $get_publish=Artikel::join('penulis_artikel', 'penulis_artikel.id', '=', 'artikel.id_penulis')
                        ->join('kategori_artikel', 'kategori_artikel.kode', '=', 'artikel.kategori_artikel_kode')
                        ->join('publish_artikel', 'publish_artikel.id_artikel', '=', 'artikel.id')
                        ->select('artikel.id','artikel.judul', 'artikel.foto_penulis', 'publish_artikel.publish_at', 'publish_artikel.edoc_pdf', 'artikel.tentang_artikel')
                        ->join("statistik_baca", 'statistik_baca.id_artikel', '=', 'artikel.id')
                        ->orderBy('statistik_baca.jumlah', 'desc')
                        ->get();
        //$get_kategori
        $data_artikel=[];
        $x=0;
        $get_issue=Issue_artikel::all();
        $jumlah_issue=$get_issue->count();
        foreach($get_publish as $list_artikel){
            $replace_1=str_replace('../resources/upload/edoc/artikel/pdf/', '', $list_artikel['edoc_pdf']);
            $tentang_artikel=substr($list_artikel['tentang_artikel'],0,200);
            $data_artikel[$x]['edoc_pdf']=str_replace('.pdf', '', $replace_1);
            $data_artikel[$x]['judul']=$list_artikel['judul'];
            $data_artikel[$x]['foto_penulis']=$list_artikel['foto_penulis'];
            $data_artikel[$x]['publish_at']=$list_artikel['publish_at'];
            $data_artikel[$x]['tentang_artikel']=$tentang_artikel;
            $data_artikel[$x]['token_a']=Crypt::encrypt($list_artikel['id']);
            $x++;
        }
        $jumlah_publish=$get_publish->count();
        $get_persiapan=Artikel::where('step', 7)->get();

        $get_kategori_artikel=Kategori_artikel::all();

        $get_config=Config::where('config_name', 'Logo')->first();

        return view('web/web', ['artikel'=>$data_artikel, 'issue'=>$get_issue, 'jumlah_issue'=>$jumlah_issue, 'jumlah_publish'=>$jumlah_publish, 'jumlah_persiapan'=>$get_persiapan->count(), 'kategori_artikel'=>$get_kategori_artikel, 'logo'=>$get_config['file_value']]);
    }
    public function bacaArtikel($judul, $id_artikel){
        try{
            $artikel_id=Crypt::decrypt($id_artikel);
            $edoc_pdf="../resources/upload/edoc/artikel/pdf/".$judul.".pdf";
            $get_artikel=Publish_artikel::where('id_artikel', $artikel_id)
                            ->join('artikel', 'artikel.id', '=', 'publish_artikel.id_artikel')
                            ->join('penulis_artikel', 'penulis_artikel.id', '=', 'artikel.id_penulis')
                            ->select('artikel.judul', 'artikel.tentang_artikel', 'publish_artikel.text_tulisan', 'artikel.foto_penulis', 'penulis_artikel.nama', 'publish_artikel.publish_at', 'publish_artikel.code_issue')
                            ->where('edoc_pdf', $edoc_pdf)
                            ->whereRaw('publish_at is not null')
                            ->first();
            if(!is_null($get_artikel)){
                $get_keyword=Keyword::where('id_artikel', $artikel_id)->get();

                // $get_similar=Artikel::join('keyword_artikel', 'keyword_artikel.id_artikel', 'artikel.id')
                //                 ->join('publish_artikel', 'publish_artikel.id_artikel', '=', 'artikel.id')
                //                 ->select('artikel.*', 'publish_artikel.publish_at', 'publish_artikel.edoc_pdf')
                //                 ->whereRaw("keyword_artikel.keyword like '%".$real_tag."%' ")
                //                 ->get();
                return view('web/baca_artikel', ['artikel'=>$get_artikel, 'keyword'=>$get_keyword]);
            }else{
                return view('web/404');    
            }
        }catch(DecryptException $e){
            return view('web/404');
        }
    }
    public function getArtikelByTag($tag){
        $real_tag=str_replace('-', ' ', $tag);
        $get_data=Artikel::join('keyword_artikel', 'keyword_artikel.id_artikel', 'artikel.id')
                        ->join('publish_artikel', 'publish_artikel.id_artikel', '=', 'artikel.id')
                        ->select('artikel.*', 'publish_artikel.publish_at', 'publish_artikel.edoc_pdf')
                        ->whereRaw("keyword_artikel.keyword like '%".$real_tag."%' ")
                        ->get();
        return view('web/list_artikel', ['artikel'=>$get_data, 'tag'=>$real_tag]);
    }
    public function getListArtikelByIssue($code_issue){
        $get_data=Publish_artikel::join('artikel', 'artikel.id', '=', 'publish_artikel.id_artikel')
                                ->join('penulis_artikel', 'penulis_artikel.id', '=', 'artikel.id_penulis')
                                ->select('artikel.judul', 'artikel.id', 'penulis_artikel.nama', 'publish_artikel.publish_at', 'artikel.foto_penulis', 'artikel.tentang_artikel', 'publish_artikel.edoc_pdf')
                                ->where('step', 8)
                                ->get();
        foreach($get_data as $list_data){
            $replace=str_replace('../resources/upload/image/', '', $list_data['foto_penulis']);
            if(!File::exists('../resources/upload/image/thumbnail/thumbnail_'.$replace)){
                $this->createThumbnail($replace, $list_data['foto_penulis']);
            }
        }
        $get_issue=Issue_artikel::where('code_issue', $code_issue)->first();
        return view('web/list_artikel_by_tema', ['title'=>'Daftar Artikel '.$get_issue['name'], 'issue'=>$get_issue['name'], 'artikel'=>$get_data]);
    }
    public function err404(){

    }
    public function createThumbnail($filename, $path){
        $source = imagecreatefromjpeg($path);
        list($width, $height) = getimagesize($path);

        // Define new dimensions (200x200 pixels)
        $newWidth = 600;
        $newHeight = 550;

        // Create a new image
        $thumb = imagecreatetruecolor($newWidth, $newHeight);

        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        // Save the resized image
        imagejpeg($thumb, '../resources/upload/image/thumbnail/thumbnail_'.$filename, 100);
    }
    public function artikelSedangPublish(){
        $get_artikel=Artikel::join('publish_artikel', 'publish_artikel.id_artikel', '=', 'artikel.id')
                            ->join('issue_artikel', function($q){
                                $q->on('issue_artikel.code_issue', '=', 'publish_artikel.code_issue')
                                ->where('issue_artikel.status', 2);
                            })
                            ->join('penulis_artikel', 'penulis_artikel.id', '=', 'artikel.id_penulis')
                            ->select('artikel.judul', 'artikel.id', 'penulis_artikel.nama', 'publish_artikel.publish_at', 'artikel.foto_penulis', 'artikel.tentang_artikel', 'publish_artikel.edoc_pdf')
                    ->where('artikel.step', 8)
                    ->get();
        $get_publish_issue=Issue_artikel::where('status', 2)->first();
        return view('web/list_artikel_publish', ['title'=>'Daftar Publish Artikel', 'issue'=>$get_publish_issue['name'], 'artikel'=>$get_artikel]);
    }
    public function arsipIssue(){
        $get_issue=Issue_artikel::whereRaw('status >= 2')->get();
        return view('web/list_arsip_issue', ['title'=>'Arsip Tema Artikel', 'issue'=>$get_issue]);
    }
    public function earlyview(){
        $get_artikel=Artikel::join('publish_artikel', 'publish_artikel.id_artikel', '=', 'artikel.id')
                            ->join('issue_artikel', function($q){
                                $q->on('issue_artikel.code_issue', '=', 'publish_artikel.code_issue')
                                ->where('issue_artikel.status', 2);
                            })
                            ->join('penulis_artikel', 'penulis_artikel.id', '=', 'artikel.id_penulis')
                            ->select('artikel.judul', 'artikel.id', 'penulis_artikel.nama', 'publish_artikel.publish_at', 'artikel.foto_penulis', 'artikel.tentang_artikel', 'publish_artikel.edoc_pdf')
                    ->where('artikel.step', 7)
                    ->get();
        $get_publish_issue=Issue_artikel::where('status', 2)->first();
        // foreach($get_artikel as $list_artikel){
        //     $replace=str_replace('../resources/upload/image/', '', $list_artikel['foto_penulis']);
        //     if(!File::exists('../resources/upload/image/thumbnail/thumbnail_'.$replace)){
        //         $this->createThumbnail($replace, $list_artikel['foto_penulis']);
        //     }
        // }
        return view('web/list_early_view', ['title'=>'Early View Artikel', 'issue'=>$get_publish_issue['name'], 'artikel'=>$get_artikel]);
    }
    public function searchArtikel(){
        return view('web/form_search', ['title'=>'Search']);
    }
    public function searchResult(Request $request){
        $keyword=$request->kata_kunci;
        $judul=$request->judul;
        $nama=$request->nama_penulis;
        $x=0;
        $result=[];
        if($judul !== null || $keyword !== null || $nama !== null){
            if($keyword !== null){
                $kata_kunci=Artikel::join('keyword_artikel', function($q) use($keyword){
                                $q->on('keyword_artikel.id_artikel', '=', 'artikel.id')
                                ->whereRaw("keyword_artikel.keyword like '%".$keyword."%' ");
                        })
                        ->join('publish_artikel', 'publish_artikel.id_artikel', '=', 'artikel.id')
                        ->join('penulis_artikel', 'penulis_artikel.id', '=', 'artikel.id_penulis')
                        ->select('artikel.judul', 'publish_artikel.edoc_pdf', 'penulis_artikel.nama', 'artikel.id')
                        ->get();
                foreach($kata_kunci as $list_data){
                    // $replace_1=str_replace('../resources/upload/edoc/artikel/pdf/', '', $list_data['edoc_pdf']);
                    $replace_1=str_replace('../resources/upload/edoc/artikel/pdf/', '', strtolower($list_data['edoc_pdf']));
                    $link=str_replace('.pdf', '', $replace_1);
                    $result[$x]['judul']=$list_data['judul'];
                    $result[$x]['edoc_pdf']=$link;
                    $result[$x]['penulis']=$list_data['nama'];
                    $result[$x]['id']=Crypt::encrypt($list_data['id']);
                    $x++;
                }
            }
            if($nama !== null){
                $get_penulis=Artikel::join('penulis_artikel', function($q) use($nama){
                                            $q->on('penulis_artikel.id', '=', 'artikel.id_penulis')
                                            ->whereRaw("penulis_artikel.nama like '%".$nama."%' ");
                                    })
                        ->join('publish_artikel', 'publish_artikel.id_artikel', '=', 'artikel.id')
                        ->select('artikel.judul', 'publish_artikel.edoc_pdf', 'penulis_artikel.nama', 'artikel.id')
                        ->get();
                foreach($get_penulis as $list_data_penulis){
                    $replace_1=str_replace('../resources/upload/edoc/artikel/pdf/', '', strtolower($list_data_penulis['edoc_pdf']));
                    $link=str_replace('.pdf', '', $replace_1);
                    $result[$x]['judul']=$list_data_penulis['judul'];
                    $result[$x]['edoc_pdf']=$link;
                    $result[$x]['penulis']=$list_data_penulis['nama'];
                    $result[$x]['id']=Crypt::encrypt($list_data_penulis['id']);
                    $x++;
                }
            }

            if($judul !== null){
                $get_judul=Artikel::join('penulis_artikel', 'penulis_artikel.id', '=', 'artikel.id_penulis')
                                    ->join('publish_artikel', 'publish_artikel.id_artikel', '=', 'artikel.id')
                                    ->select('artikel.judul', 'publish_artikel.edoc_pdf', 'penulis_artikel.nama', 'artikel.id')
                                    ->whereRaw("judul like '%".$judul."%'")
                                    ->get();
                foreach($get_judul as $list_data_judul){
                    // $replace_1=str_replace('../resources/upload/edoc/artikel/pdf/', '', $list_data_judul['edoc_pdf']);
                    $replace_1=str_replace('../resources/upload/edoc/artikel/pdf/', '', strtolower($list_data_judul['edoc_pdf']));
                    $link=str_replace('.pdf', '', $replace_1);
                    $result[$x]['judul']=$list_data_judul['judul'];
                    $result[$x]['edoc_pdf']=$link;
                    $result[$x]['penulis']=$list_data_judul['nama'];
                    $result[$x]['id']=Crypt::encrypt($list_data_judul['id']);
                    $x++;
                }
            }
        }
        return view('web/form_search', ['title'=>'Search', 'hasil_search'=>$result, 'jumlah'=>$x, 'search_for'=>"<span style='color:orange'><i>".$nama.' '.$judul.' '.$keyword."</span></i>", 'nama'=>$nama, 'keyword'=>$keyword, 'judul'=>$judul]);
    }
}
