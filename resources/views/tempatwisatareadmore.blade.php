<!DOCTYPE HTML>
<!--
Greatness by FreeHTML5.co
Twitter: http://twitter.com/fh5co
URL: http://FreeHTML5.co
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Sistem Pendukung Keputusan Pemilihan Obyek Wisata Dikota Gorontalo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />
  <link rel="icon" href="{{asset('assets/images/logo.png')}}">
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

  <!-- Animate.css -->
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

  <!-- Theme style  -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  <!-- Modernizr JS -->
  <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <div class="gtco-loader"></div>

  <div id="page">
    <nav class="gtco-nav" role="navigation">
      <div class="gtco-container">
        <div class="row">
          <div class="col-xs-2">
            <div id="gtco-logo"><a href="/">
              <img src="{{asset('assets/images/logo.png')}}" style="height: 80px;">
            </div>
          </div>
          <div class="col-xs-10 text-right menu-1">
            <ul>
							<li><a href="/">Home</a></li>
							<li class="active"><a href="/tempatwisata">Daftar Obyek Wisata</a></li>
							<li><a href="/tentang">Profil</a></li>
						</ul>
          </div>
        </div>

      </div>
    </nav>
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url({{asset('assets/images/img_bg_1.jpg')}});">
      <div class="overlay"></div>
      <div class="gtco-container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="display-t">
              <div class="display-tc animate-box" data-animate-effect="fadeIn">
                <h1>Daftar Obyek Wisata</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="gtco-section">
      <div class="gtco-container">
        <div class="row animate-box">
          <div class="artikel">
            <div class="col-md-3 col-md-push-9">
              <h4 class="">Cari Obyek Wisata</h4>
              <form method="get" action="/tempatwisata/cari" enctype="multipart/form-data">
              <input style="border: none; background: none; width:80%" type="text" name="search" placeholder="Cari..." autocomplete="off">
              <button style="border: none; background: none;"><i class="icon-search"></i></button>
              <div class="hidden-lg hidden-md" style="margin-top: 5px">

               </form>
              </div>

              <div class="marginbot-bottom30"></div>
                    </div>
                    <div class="col-md-9 col-md-pull-3" style="visibility: visible; animation-name: fadeInUp;">
                      <div class="page-header marginbot-top" style="border: 1">
                    <table border="0">
                        <tbody><tr>
                          <td style="padding-right: 10px;"><img src="" class="img-responsive img-circle"></td>
                            <td style="padding-top: 10px">
                                <p style="margin-top: 5px">
                                <small class="text-muted">
                                    &nbsp;&nbsp;Ditulis oleh <b>Admin</b> </br>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;
                                    Di Upload Pada {{$tempatwisata->created_at}}                                 <br>
                                    </a>
                                </small>
                                </p>
                            </td>
                        </tr>
                    </tbody></table>
                    <div class="marginbot-bottom30"></div>

                    <h1>
                    <b>{{$tempatwisata->nama_tempat_wisata}}</b>
                    </h1>

                    <div class="marginbot-bottom30"></div>
                    <iframe src="{{asset('/foto_tempat_wisata/'.$tempatwisata->foto) }}" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>

                  <div class="post-read">
                  <p>Estimasi Harga Tiket : Rp {{$tempatwisata->harga_tiket}}</p>
                  <p>Tingkat Kebersihan : {{$tempatwisata->kebersihan}}</p>
                  <p>Jarak Tempuh Dari Kota Gorontalo : {{$tempatwisata->jarak_tempuh}} Km</p>
                  <p>Waktu Kunjungan : {{$tempatwisata->waktu_kunjungan}} Wita</p>
                  <p>Daya Tampung Perhari : {{$tempatwisata->jumlah_pengunjung}} /Orang</p>
                  <p>Popularitas : {{$tempatwisata->popularitas}}</p>
                  <p>Maksimal Jumlah Tampung : {{$tempatwisata->max_tampung}} Orang</p>
                  <p>Luas Tempat Wisata : {{$tempatwisata->luas_tempat_wisata}} Ha</p>
                  <p>Wahana Yang Disediakan : {{$tempatwisata->wahana}}</p>
                  <p>Protokol Covid : {{$tempatwisata->protokol_covid}}</p>
                  <p>Deskripsi : {{$tempatwisata->deskripsi}}</p>

                  </div>
                  <div class="marginbot-bottom30">&nbsp;</div>
                  </div>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="gototop js-top">
                <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
              </div>

              <!-- jQuery -->
              <script src="{{asset('assets/js/jquery.min.js')}}"></script>
              <script type="text/javascript">

              var slideIndex = 1;
              showDivs(slideIndex);

              function plusDivs(n) {
                showDivs(slideIndex += n);
              }

              function currentDiv(n) {
                showDivs(slideIndex = n);
              }

              function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" slide-red", "");
                }
                x[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " slide-red";
              }
              </script>
              <script type="text/javascript">
              var rev = "fwd";
              function titlebar(val){
              var msg  = "Aplikasi Sistem Pendukung Keputusan Pemilihan Obyek Wisata Dikota Gorontalo";
              var res = " ";
              var speed = 100;
              var pos = val;
              var le = msg.length;
              if(rev == "fwd"){
                if(pos < le){
                    pos = pos+1;
                    scroll = msg.substr(0,pos);
                    document.title = scroll;
                    timer = window.setTimeout("titlebar("+pos+")",speed);
                } else {
                    rev = "bwd";
                    timer = window.setTimeout("titlebar("+pos+")",speed);
                }
              } else {
                if(pos > 0) {
                    pos = pos-1;
                    var ale = le-pos;
                    scrol = msg.substr(ale,le);
                    document.title = scrol;
                    timer = window.setTimeout("titlebar("+pos+")",speed);
                } else {
                    rev = "fwd";
                    timer = window.setTimeout("titlebar("+pos+")",speed);
                }
              }
              }
              titlebar(0);
              </script>
              <!-- jQuery Easing -->
              <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
              <!-- Bootstrap -->
              <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
              <!-- Waypoints -->
              <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
              <!-- Carousel -->
              <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
              <!-- countTo -->
              <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
              <!-- Magnific Popup -->
              <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
              <script src="{{asset('assets/js/magnific-popup-options.js')}}"></script>
              <!-- Main -->
              <script src="{{asset('assets/js/main.js')}}"></script>

            </body>
            </html>
