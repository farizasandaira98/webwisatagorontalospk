<!DOCTYPE HTML>
<!--
Greatness by FreeHTML5.co
Twitter: http://twitter.com/fh5co
URL: http://FreeHTML5.co
-->
<html>
<head>
  <title>Aplikasi Sistem Pendukung Keputusan Pemilihan Obyek Wisata Dikota Gorontalo</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
					<div class="col-xs-5">
						<div id="gtco-logo">
							<a href="/">
								<img src="{{asset('assets/images/logo.png')}}" style="height: 80px;">
							</a>
						</div>
					</div>
					<div class="col-xs-7 text-right menu-1">
						<ul>
							<li class="active"><a href="/">Home</a></li>
							<li><a href="/tempatwisata">Daftar Obyek Wisata</a></li>
							<li><a href="/tentang">Profil</a></li>
						</ul>
					</div>
				</div>

			</div>
		</nav>
		<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url({{asset('assets/images/img_bg_1.jpg')}});">
      <div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Selamat Datang</h1>
								<h2>Di Situs Rekomendasi Obyek Wisata Kota Gorontalo</h2>
								<p>
								</div>
							</div>
						</div>
					</div>
			</header>

			<div id="gtco-features"  style="background-image:url({{asset('assets/images/img_bg_4.jpg')}});">
				<div class="gtco-container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
							<h2>Pilih Menu</h2>
							<p></p>
						</div>
						<div class="col-md-6 col-sm-4">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i class="icon-user"></i>
								</span>
								<h3>Menu Admin</h3>
								<p><a href="/login" class="btn btn-primary btn-outline">Masuk</a></p>
							</div>
						</div>
						<div class="col-md-6 col-sm-4">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i class="icon-book"></i>
								</span>
								<h3>Mengisi Buku Tamu</h3>
								<p><a href="/wisatawan" class="btn btn-primary btn-outline">Masuk</a></p>
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
