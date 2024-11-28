<?php
    use Carbon\Carbon;
    use App\User;
    use Illuminate\Support\Facades\Auth;
    use App\Editorial_team;
    use App\Artikel;
    use App\Reviewer_artikel;
    if(!function_exists('checkUserByNip')){
        function checkUserByNip($nip, $action){
            $get_user=User::where('nip', $nip)->first();
            if(!is_null($get_user) && $action === "login"){
                $get_user->makeVisible(['password']);
                return $get_user;
            }
            return false;
        }
    }
    if(!function_exists('isReviewer')){
        function isReviewer(){
            $nip=Auth::user()->nip;
            $get_editorial_team=Editorial_team::join('pegawai', 'pegawai.id', '=', 'editorial_team.id_pegawai')
                            ->where('editorial_team.active', true)
                            ->where('editorial_team.sebagai', 'editor')
                            ->where('pegawai.nip', $nip)
                            ->first();
            if(!is_null($get_editorial_team)){
                return true;
            }
            return false;
        }
    }
    if(!function_exists('isYourReviewArtikel')){
        function isYourReviewArtikel($review_id, $artikel_id){
            $nip=Auth::user()->nip;
            $get_data=Reviewer_artikel::join('pegawai', 'pegawai.id', '=', 'reviewer_artikel.id_pegawai')
                        ->where('reviewer_artikel.id_review', $review_id)
                        ->where('reviewer_artikel.id_artikel', $artikel_id)
                        ->where('pegawai.nip', $nip)
                        ->where('reviewer_artikel.status', true)
                        ->first();
            if(!is_null($get_data)){
                return true;
            }
            return false;

        }
    }
    if(!function_exists('isJM')){
        function isJM(){
            $nip=Auth::user()->nip;
            $get_editorial_team=Editorial_team::join('pegawai', 'pegawai.id', '=', 'editorial_team.id_pegawai')
                            ->where('editorial_team.active', true)
                            ->where('editorial_team.sebagai', 'jurnal_manager')
                            ->where('pegawai.nip', $nip)
                            ->first();
            if(!is_null($get_editorial_team)){
                return true;
            }
            return false;
        }
    }
    if(!function_exists('isYourArtikel')){
        function isYourArtikel($artikel_id){
            $get_data=Artikel::join('penulis_artikel', 'penulis_artikel.id', '=', 'artikel.id_penulis')
                    ->where('artikel.id', $artikel_id)
                    ->where('penulis_artikel.nip', Auth::user()->nip)
                    ->first();
            if(isset($get_data)){
                return true;
            }
            return false;
        }
    }
?>