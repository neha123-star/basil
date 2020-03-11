<!DOCTYPE html>
<html>
<head>
  <title>Basil</title>

    <link rel="stylesheet" href="{{url('assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{url('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/fontawesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
   
</head>
<body  data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<nav class="navbar navbar-expand-lg  ftco_navbar navbar-light bg-light ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="/tampil">Ba<span>sil</span></a>
          <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto ">
              <li class="nav-item"><a href="/tampil" class="nav-link"><span>Home</span></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produk
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/tampil/office">Ms Office</a>
                <a class="dropdown-item" href="/tampil/programming">Programming</a>
                <a class="dropdown-item" href="/tampil/desain">Desain</a>
              </div>
            </li>
            <li class="nav-item"><a href="/tampil/about" class="nav-link"><span>Tentang</span></a></li>
            <li class="nav-item"><a href="/tampil/contact" class="nav-link"><span>Kontak</span></a></li>

            </ul>
          <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item ">
                                <a class="nav-link"  data-toggle="modal" data-target="#signin" href="" class="nav-link ">{{__('Masuk') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="modal" data-target="#signup" href="" class="nav-link">{{ __('Daftar') }}</a>
                                </li>
                            @endif
                        @else
                           
                            <li class="nav-item ">
                                <a id="navbar" class="nav-link" href="#" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <i class="fa fa-user"></i>   {{ Auth::user()->name }}   <span class="caret"></span>
                                </a>
                                </li>
                                 <li class="nav-link" >
                              <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <label class="text-danger">{{ __('Keluar') }}</label>
                                    </a>
                            </li>
                            <li>
                                
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>

                            </li>
                        @endguest
                    </ul>
  
          </div>
        </div>
      </nav>
   
<section class="site-blocks-cover " data-stellar-background-ratio="0.5" style="background-position: 50% -1px;">
	  	<div class="container  ">

 
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="text-center">
              <h3>Untuk Mengedit Produk KliK tombol dibawah</h3>
            </div>
          </div>
          <div class="col">
            <div class="text-center ">
              <h2><a href="/tampil/lihatoff" class="btn btn-primary">Microsoft Office</a></h2>
            </div>
          </div>
          <div class="col">
          	<div class="text-center">
          	<h2><a href="/tampil/lihatpg" class="btn btn-primary">Programming</a></h2></div>
          </div>
          <div class="col">
          	<div class="text-center">
          	<h2><a href="/tampil/lihatds" class="btn btn-primary">Desain</a></h2></div>
          </div>
        </div>
      </div>
    </section>

  
<!-- Modal Sign In-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel">Masuk</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                           
                            <div class="col-md-12">
                                <input id="email"  placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password"placeholder="Password"type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary   btn-lg btn-block">
                                    {{ __('Masuk') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
                    </div>
                    </div>
                    </div>

</div>
    <!--/.Content-->
  </div>
</div>
</div>

<!-- Modal Sign Up-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel">Daftar</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                           
                            <div class="col-md-12">
                                <input id="name" placeholder="Nama anda" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-12">
                                <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-12">
                                <input id="password-confirm" placeholder="ulangi  password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary   btn-lg btn-block">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--/.Content-->
  </div>
</div>
</div>
<!-- Modal -->

  <script src="{{url('assets/js/jquery.min.js')}}"></script>
  <script src="{{url('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>

  <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{url('assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{url('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{url('assets/js/aos.js')}}"></script>
  <script src="{{url('assets/js/scrollax.min.js')}}"></script>
  
  <script src="{{url('assets/js/main.js')}}"></script>
    
</body>
</html>