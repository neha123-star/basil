
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Basil</title>


    <link rel="stylesheet" href="{{url('assets/css/open-iconic-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{url('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/fontawesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
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
                                 <li class="nav-link">
                              <a class="nav-link text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

            <main class="py-0">
            @yield('content')
        </main>
    </div>
    
  
    
    
   



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
    
  <script src="{{url('assets/js/main.js')}}"></script>
     <script src="{{url('assets/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="{{url('assets/js/jquery.mask.js')}}"></script>
    <script type="text/javascript">
            $(document).ready(function(){

                // Format mata uang.
                $( '.uang' ).mask('000. 000.000', {reverse: true});

            })
        </script>
</body>
</html>
    <!-- Fonts -->
