<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="{!! asset('../resources/views/web/assets/img/apple-icon.png') !!}">
<link rel="icon" type="image/png" href="{!! asset('../resources/views/web/assets/img/favicon.png') !!}">

<title>Arunika By SIGANIS</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="{!! asset('../resources/views/web/assets/css/nucleo-icons.css') !!}" rel="stylesheet" />
<link href="{!! asset('../resources/views/web/assets/css/nucleo-svg.css') !!}" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="{!! asset('../resources/views/web/assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />





<!-- Nepcha Analytics (nepcha.com) -->
<!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js') !!}"></script>
</head>

<body class="index-page bg-gray-200">
  
  
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4 bg-white-transparent">
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="{!! url('/home') !!}" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      ARUNIKA - Artikel Hukum Hakim Indonesia
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
            Artikel
            <img src="{!! asset('../resources/views/web/assets/img/down-arrow-dark.svg') !!}" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
            <div class="d-none d-lg-block">
  <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
    Status Artikel
  </h6>
  <a href="{!! url('/sedang-publish') !!}" class="dropdown-item border-radius-md">
    <span>Sedang Publish</span>
  </a>
  <a href="{!! url('/arsip') !!}" class="dropdown-item border-radius-md">
    <span>Arsip</span>
  </a>
  <a href="{!! url('/early-view') !!}" class="dropdown-item border-radius-md">
    <span>Early View</span>
  </a>
  <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
    Pencarian
  </h6>
  <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
    <span>Cari Berdasarkan Kategori

    </span>
  </a>
</div>

          </div>
        </li>
  <li class="nav-item ms-lg-auto">
    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" href="{!! url('/search') !!}">
      <i class="material-icons opacity-6 me-2 text-md">search</i> Search
    </a>
  </li>
  <li class="nav-item dropdown dropdown-hover mx-2">
    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="material-icons opacity-6 me-2 text-md">view_day</i>
            Penulisan <img src="{!! asset('../resources/views/web/assets/img/down-arrow-dark.svg') !!}" alt="down-arrow" class="arrow ms-auto ms-md-2">
    </a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
        <div class="d-none d-lg-block">
          <li class="nav-item dropdown dropdown-hover dropdown-subitem">
            <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
              <div class="w-100 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Pedoman</h6>
                  <span class="text-sm">Penulisan Artikel</span>
                </div>
                <img src="{!! asset('../resources/views/web/assets/img/down-arrow.svg') !!}" alt="down-arrow" class="arrow">
              </div>
            </a>
            <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
              <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/hero-sections.html">
                Syarat Penulisan
              </a>
              <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/features.html">
                Checklist Penilaian Penulisan
              </a>
            </div>
          </li>
          </ul>
        </li>
        <li class="nav-item my-auto ms-3 ms-lg-0">
          <a href="{!! url('/login') !!}" class="btn btn-sm  bg-gradient-info  mb-0 me-1 mt-2 mt-md-0" target="_blank">
            {!! isset(Auth::user()->name) === true ? Auth::user()->name : 'Login' !!}
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div></div></div>
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('{!! asset('../resources/upload/config/arunika.gif') !!}');background-size:contain;background-repeat:no-repeat;">
    <span class="mask bg-gradient-info opacity-6"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Call For Paper</h1>
          <p class="lead text-white mt-3">{!! $issue[$jumlah_issue-1]['description'] !!} </p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  <section class="pt-3 pb-4" id="count-stats">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto py-3">
          <div class="row">
            <div class="col-md-3 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"><span id="state1" countTo="{!! $jumlah_publish !!}">0</span></h1>
                <h5 class="mt-3">Artikel Publish</h5>
                <p class="text-sm font-weight-normal">Artikel Masuk dan Sudah dipublish</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-3 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"> <span id="state2" countTo="{!! $jumlah_issue !!}">0</span>+</h1>
                <h5 class="mt-3">Volume Tema</h5>
                <p class="text-sm font-weight-normal">Arunika Publish Theme</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-3 postition-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary" id="state3" countTo="{!! $kategori_artikel->count() !!}">0</h1>
                <h5 class="mt-3">Kategori Tulisan</h5>
                <p class="text-sm font-weight-normal">Kategori Tulisan Artikel</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary" id="state4" countTo="">{!! $jumlah_persiapan !!}</h1>
                <h5 class="mt-3">Ready to Publish</h5>
                <p class="text-sm font-weight-normal">Artikel Siap untuk dipulish</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="rotating-card-container" style='height:60%;'>
            <div class="card card-rotate card-background card-background-mask-primary mt-md-0 mt-5" style='height:100%;'>
              <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;height:100%;background-position:center;">
                <div class="card-body py-7 text-center">
                  <i class="material-icons text-white text-4xl my-3">touch_app</i>
                  <h3 class="text-white">Submit <br /> Artikelmu</h3>
                  <p class="text-white opacity-8">Arunika memberikan kesempatan bagi Hakim dibawah Badan Peradilan Umum untuk menulis artikel dan opini.</p>
                </div>
              </div>
              <div class="back back-backgrounds" style="background-image: url('{!! $issue[$jumlah_issue-1]['flyer'] !!}'); background-size: contain;height:100%;background-position:center;background-repeat:no-repeat;">
                <div class="card-body pt-7 text-center" >
                  <a href="{!! url('/login') !!}" target="_blank" class="btn btn-info btn-sm w-90 mx-auto mt-3" style='bottom:0;position:fixed;'>Submit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="row justify-content-start">
            <div class="col-md-12">
              <div class="info">      
                <h5 class="font-weight-bolder mt-3" style='color:#684DF4'><i class="material-icons text-gradient text-primary text-3xl">content_copy</i> Kategori Artikel</h5>
              </div>
            </div>
            @foreach($kategori_artikel as $list_kategori)
              <h6>{!! $list_kategori['kategori'] !!}</h6>

            @endforeach
          </div>
        </div>
        <div class="col-md-5">
          <div class="row justify-content-start">
            <div class="col-md-12">
              <div class="info">      
                <h5 class="font-weight-bolder mt-3" style='color:#684DF4'><i class="material-icons text-gradient text-primary text-3xl">content_copy</i> Artikel Terpopuler</h5>
              </div>
            </div>
          </div>
          @php $index=1 @endphp
          @foreach($artikel as $list_artikel)
            <a href="{!! url('baca-artikel/'.strtolower($list_artikel['edoc_pdf']).'/'.$list_artikel['token_a']) !!}">
              <div class="row justify-content-start mb-4">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-3" style="background-image:url('../resources/upload/image/thumbnail/thumbnail_{!! str_replace('../resources/upload/image/', '', $list_artikel['foto_penulis']) !!}');height:150px;background-size:cover;background-position:center;border-radius:5%;">
                    
                    </div>
                    <div class="col-md-9">
                      <h6>{!! ucwords(strtolower($list_artikel['judul'])) !!}</h6>
                      {!! date('d F Y', strtotime($list_artikel['publish_at'])) !!}
                    </div>
                  </div>
                </div>
              </div>
            </a>
            @php 
              $index++;
              if($index === 4){
                break;
              }
            @endphp
          @endforeach
          <div>
        <div>
      </div>
    </div>
  </section>
  <section>
  <hr class="horizontal dark">
  </section>
  <section class="my-2 py-2">
    <div class="container">
      <div class="row">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <hr />
            <span class="badge bg-info mb-3">Koleksi</span>
            <h3 class="text-dark mb-0">Daftar Tema Artikel ARUNIKA</h3>
            <p class="lead">. </p>
          </div>
        </div>
        <div class="row">
          @php $x=1 @endphp
          @foreach($issue as $list_issue)
            <div class="col-lg-3">
              <div class="row">
                <div class="col-lg-12 mb-3" style="background-image:url('{!! $list_issue['flyer'] !!}');min-height:300px;background-size:contain;background-positon:center;background-repeat:no-repeat"></div>
                <div class="col-lg-12">
                <center>
                  <a href="{!! url('issue/'.$list_issue['code_issue']) !!}">
                  <span style='font-size:1.1rem;font-weight:bold;'>Arunika {!! $x !!} : </span>
                  <span style='font-size:1.1rem;font-weight:bold;'>{!! $list_issue['name'] !!}</span>
                  <br />({!! $list_issue['year'] !!})</a></center>
                </div>
              </div>
            </div>
            @php $x++ @endphp
          @endforeach
        </div>
      </div>
    </div>
    <div class="container mt-sm-5 mt-3">
      <div class="row">
        <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-12">
                <div class="row justify-content-center text-center">
                  <div class="col-lg-6">
                    <span class="badge bg-warning mb-1">Pengumuman</span>
                    <h4 class="text-dark mb-0">Daftar Pengumuman Arunika</h4>
                    <p class="lead">. </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <center><span style='color:grey;'>** Belum ada Pengumuman **</span></center>
              </div>
            </div>
        </div>

      </div>
    </div>
  </section>
<!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

<!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

</div>


  

  <footer class="footer pt-5 mt-5">
  <div class="container">
    <div class=" row">
      <div class="col-md-3 mb-4 ms-auto">
        <div>
          <a href="{!! url('/home') !!}">
            <img src="{!! asset($logo) !!}" class="mb-3 footer-logo" alt="main_logo" style='max-width:7rem;'>
          </a>
          <h6 class="font-weight-bolder mb-4">Arunika Badilum</h6>
        </div>
        <div>
          <ul class="d-flex flex-row ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                <i class="fab fa-facebook text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                <i class="fab fa-twitter text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                <i class="fab fa-dribbble text-lg opacity-8"></i>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                <i class="fab fa-github text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                <i class="fab fa-youtube text-lg opacity-8"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>



      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Company</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                About Us
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                Freebies
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                Premium Tools
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                Blog
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Resources</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="https://iradesign.io/" target="_blank">
                Illustrations
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                Bits & Snippets
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                Affiliate Program
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Help & Support</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                Contact Us
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                Knowledge Center
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                Custom Development
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                Sponsorships
              </a>
            </li>

          </ul>
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
        <div>
          <h6 class="text-sm">Legal</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">
                Terms & Conditions
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
                Privacy Policy
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                Licenses (EULA)
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-12">
        <div class="text-center">
          <p class="text-dark my-4 text-sm font-weight-normal">
            All rights reserved. Copyright © <script>document.write(new Date().getFullYear())</script> Tim Siganis <a href="https://siganisbadilum.mahkamahagung.go.id/" target="_blank">Dev Team</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>


  

  
  















<!--   Core JS Files   -->
<script src="{!! asset('../resources/views/web/assets/js/core/popper.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('../resources/views/web/assets/js/core/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('../resources/views/web/assets/js/plugins/perfect-scrollbar.min.js') !!}"></script>




<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{!! asset('../resources/views/web/assets/js/plugins/countup.min.js') !!}"></script>





<script src="{!! asset('../resources/views/web/assets/js/plugins/choices.min.js') !!}"></script>



<script src="{!! asset('../resources/views/web/assets/js/plugins/prism.min.js') !!}"></script>
<script src="{!! asset('../resources/views/web/assets/js/plugins/highlight.min.js') !!}"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="{!! asset('../resources/views/web/assets/js/plugins/rellax.min.js') !!}"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="{!! asset('../resources/views/web/assets/js/plugins/tilt.min.js') !!}"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="{!! asset('../resources/views/web/assets/js/plugins/choices.min.js') !!}"></script>
















<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="{!! asset('../resources/views/web/assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>


<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>


























</body>

</html>
