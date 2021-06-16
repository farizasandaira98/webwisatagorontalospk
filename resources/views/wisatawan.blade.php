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
                <h1>Buku Wisatawan</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="gtco-section">
      <div class="gtco-container">
        <div class="row animate-box">
              <div class="card mt-5">
                  <div class="card-header text-center">
                    <h3><strong>Petunjuk Pengisian</strong><h3>
                  </div>
                  <div class="card-header">
                    <h5>1. Wisatawan Mengisi Nama Wisatawan</h5>
                    <h5>2. Isilah kategori tempat wisata yang ingin dicari sesuai kategori yang tertera</h5>
                    <h5>3. Untuk memaksimalkan kategori tempat wisata yang dicari, diharap untuk mengisi semua field</h5>
                    <h5>4. Jika kategori yang dicari tidak ditemukan, cobalah hanya mengisi 1 atau 2 kategori saja sesuai keinginan tempat wisata yang dicari</h5>
                  </div>
                  <div class="card-body">

                      <br/>
                      <br/>
                      <div class="form-group">
                          <button type="button" class="btn btn-primary" onclick="window.location='{{ url("/wisatawan ") }}'">Reset Pilihan</button>
                      </div>
                      <form method="post" action="/wisatawan/store" enctype="multipart/form-data">

                          {{ csrf_field() }}
                          <div class="form-group">
                              <label>Nama Wisatawan</label>
                              <input type="text" name="nama_wisatawan" class="form-control" placeholder="Nama Wisatawan ..">

                              @if($errors->has('nama_tempat_wisata'))
                              <div class="text-danger">
                                  {{ $errors->first('nama_tempat_wisata')}}
                              </div>
                              @endif

                          </div>

                          <div class="form-group">
                              <label>Pilih Harga Tiket</label>
                              <select class="form-control" id="harga_tiket"
                              name="harga_tiket">
                              <option disabled selected value> -- select an option -- </option>
                              <option value="5">Sangat Murah</option>
                              <option value="4">Murah</option>
                              <option value="3">Sedang</option>
                              <option value="2">Mahal</option>
                              <option value="1">Sangat Mahal</option>
                          </select>
                          @if($errors->has('popularitas'))
                          <div class="text-danger">
                              {{ $errors->first('popularitas')}}
                          </div>
                          @endif
                        </div>

                          <div class="form-group">
                              <label>Pilih Kebersihan</label>
                              <select class="form-control" id="kebersihan"
                              name="kebersihan">
                              <option disabled selected value> -- select an option -- </option>
                              <option value="5">Sangat Bersih</option>
                              <option value="4">Bersih</option>
                              <option value="3">Biasa Saja</option>
                              <option value="2">Kotor</option>
                              <option value="1">Sangat Kotor</option>
                          </select>
                          @if($errors->has('kebersihan'))
                          <div class="text-danger">
                              {{ $errors->first('kebersihan')}}
                          </div>
                          @endif

                      </div>

                      <div class="form-group">
                          <label>Pilih Jarak Tempuh</label>
                          <select class="form-control" id="jarak_tempuh"
                          name="jarak_tempuh">
                          <option disabled selected value> -- select an option -- </option>
                          <option value="5">Sangat Dekat</option>
                          <option value="4">Dekat</option>
                          <option value="3">Sedang</option>
                          <option value="2">Jauh</option>
                          <option value="1">Sangat Jauh</option>
                      </select>
                      @if($errors->has('jarak_tempuh'))
                      <div class="text-danger">
                          {{ $errors->first('jarak_tempuh')}}
                      </div>
                      @endif

                  </div>

                  <div class="form-group">
                        <label>Waktu Kunjungan</label>
                        <select class="form-control" id="waktu_kunjungan"
                        name="waktu_kunjungan">
			                  <option disabled selected value> -- select an option -- </option>
                        <option value="5">07.00 - 19.00</option>
                        <option value="3">07.00 - 17.00</option>
                    </select>
                    @if($errors->has('waktu_kunjungan'))
                    <div class="text-danger">
                        {{ $errors->first('waktu_kunjungan')}}
                    </div>
                    @endif

                  </div>

                  <div class="form-group">
                      <label>Daya Tampung</label>
                      <select class="form-control" id="popularitas"
                      name="jumlah_pengunjung">
		      <option disabled selected value> -- select an option -- </option>
                      <option value="5">1000</option>
                      <option value="4">700</option>
                      <option value="3">500</option>
                      <option value="2">300</option>
                      <option value="1">100</option>
                  </select>
                  @if($errors->has('jumlah_pengunjung'))
                  <div class="text-danger">
                      {{ $errors->first('jumlah_pengunjung')}}
                  </div>
                  @endif

                </div>

                        <div class="form-group">
                            <label>Pilih Popularitas</label>
                            <select class="form-control" id="popularitas"
                            name="popularitas">
                            <option disabled selected value> -- select an option -- </option>
                            <option value="5">Sangat Populer</option>
                            <option value="4">Populer</option>
                            <option value="3">Biasa Saja</option>
                            <option value="2">Kurang Populer</option>
                            <option value="1">Belum Dikenal</option>
                        </select>
                        @if($errors->has('popularitas'))
                        <div class="text-danger">
                            {{ $errors->first('popularitas')}}
                        </div>
                        @endif

                      </div>

                  </br>
                  <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Simpan">
                  </div>

              </form>

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
