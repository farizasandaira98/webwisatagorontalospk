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
							<li><a href="/tempatwisata">Daftar Obyek Wisata</a></li>
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
           <center><h5><strong>Hai {{$namawisatawan}}</strong> Inilah <strong>{{  count($rekomendasitempatwisata) }}</strong> Rekomendasi Tempat Wisata Untukmu</h5></center>
           <hr>
            <div class="col-md-3 col-md-push-9">
              </div>

              <div class="marginbot-bottom30"></div>
                    </div>
                    <div class="col-md-9 col-md-pull-3">
                    @foreach($rekomendasitempatwisata as $ang1)
                      <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="col-sm-4">
                            <div class="post-thumbnail">
                                <img src="{{asset('/foto_tempat_wisata/'.$ang1->foto) }}" class="img-responsive img-thumbnail">
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-8">
                          <h3 class="title">
                            <a href="/tempatwisata/{{$ang1->id}}" title="Judul">
                            {{$ang1->nama_tempat_wisata}}</a>
                            </h3>
                            <small class="text-muted">
                              <span class="glyphicon glyphicon-calendar"></span>&nbsp;
                              Di Upload Pada  : {{$ang1->created_at}}<p style="margin-top: 5px">
                              </small>
                              <hr style="m
                              argin: 10px 0">
                              <p class="post-read">
                                {{substr($ang1->deskripsi,0,150)}}...
                              </p>
                              <p class="text-muted hidden-xs">
                                <a href="/tempatwisata/{{$ang1->id}}" class="btn btn-primary">Baca Selengkapnya <i class="fa fa-plus" aria-hidden="true"></i></a>
                              </p>
                            </div>
                          </div>
                          <hr>
                          @endforeach
                          <div class="pagination p1">
                          </div>
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
