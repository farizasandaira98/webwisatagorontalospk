<!DOCTYPE html>
<!-- saved from url=(0057)https://www.bootstrapdash.com/demo/login-template-free-1/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Halaman Admin || Aplikasi Sistem Pendukung Keputusan Pemilihan Obyek Wisata Dikota Gorontalo</title>
  <link href="./Login Template_files/css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('datalogin/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('datalogin/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('datalogin/login.css')}}">
  <link rel="icon" href="{{asset('assets/images/logo.png')}}">
<script data-dapp-detection="">!function(){let e=!1;function n(){if(!e){const n=document.createElement("meta");n.name="dapp-detected",document.head.appendChild(n),e=!0}}if(window.hasOwnProperty("ethereum")){if(window.__disableDappDetectionInsertion=!0,void 0===window.ethereum)return;n()}else{var t=window.ethereum;Object.defineProperty(window,"ethereum",{configurable:!0,enumerable:!1,set:function(e){window.__disableDappDetectionInsertion||n(),t=e},get:function(){if(!window.__disableDappDetectionInsertion){const e=arguments.callee;e&&e.caller&&e.caller.toString&&-1!==e.caller.toString().indexOf("getOwnPropertyNames")||n()}return t}})}}();</script></head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="{{asset('datalogin/logo.png')}}" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Log in</h1>
            @if(Session::has('status'))
               <div class="alert alert-danger">{{ Session::get('status') }}</div>
               @endif

         <form method="post" action="{{ route('login') }}">

              {{ csrf_field() }}
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
              </div>
              <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
            </form>

            <p class="login-wrapper-footer-text"><a href="/" class="text-reset">Kembali Ke Halaman Home</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{asset('assets/images/img_bg_1.jpg')}}" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
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
  <script src="{{asset('login/jquery-3.4.1.min.js.download')}}"></script>
  <script src="{{asset('login/popper.min.js.download')}}"></script>
  <script src="{{asset('login/bootstrap.min.js.download')}}"></script>


</body></html>
