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
                                 <li class="nav-item" >
                              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
   
  	  <section  class="hero">
			  <div class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
      	<div class="one-third order-md-last img js-fullheight" style="background-image:url('{{url('assets/images/bg_1.jpg')}}');">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
			            <h1 class="mb-4 mt-3">Software Ms Office</h1>
			            <p>Semua kebutuhan software Ms office anda ada di sini</p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>
    <hr class="shadow">
		
        <section class="ftco-section ftco-project bg-white">
            <div class="container  px-md-5 text-dark">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-12 mb-2">


                        <div class="text">
                            <h5>Temukan berbagai jenis software Microsoft Office, hanya di sini</h5>
                        </div>
                        
                             
                              
                          
                    </div>
                <div class="row">
                    @foreach($office as $off)
                    <div class="col-md-4 mb-5">
                        <div class="card" style="width: 18rem;">
                          <img src="{{url('assets/images/off/'.$off->gambar_off)}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$off->judul_off}}</h5>
                            <h3 class="card-text">Rp <label class="uang"> {{$off->harga_off}}</label></h3>
                            <p class="card-text">
                              <div class="text-truncate">
                              {{$off->isi_off}}
                            </div>
                            </p>
                          </div>
                          <div class="card-footer text-center">
                            @guest
                             @if (Route::has('register'))
                                <div class="text">
                                  Login untuk info lebih lanjut.....
                                </div>
                            @endif
                        @else
                             

                            <a href="#modal{{$off->id}}" data-toggle="modal" class="btn btn-primary">Detail produk</a>   
                           @endguest
                          </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>






    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Tautan</h2>
              <ul class="list-unstyled">
                <li><a href="/tampil"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="/tampil/about"><span class="icon-long-arrow-right mr-2"></span>Tentang</a></li>
                <li><a href="/tampil/contact"><span class="icon-long-arrow-right mr-2"></span>Kontak</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Produk</h2>
              <ul class="list-unstyled">
                <li><a href="/tampil/office"><span class="icon-long-arrow-right mr-2"></span>Ms Office</a></li>
                <li><a href="/tampil/programming"><span class="icon-long-arrow-right mr-2"></span>Programming</a></li>
                <li><a href="/tampil/desain"><span class="icon-long-arrow-right mr-2"></span>Desain Grafis</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Jika ada pertanyaan?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><a href="https://goo.gl/maps/FiUmL9S1nGM53rC66"> <span class="icon icon-map-marker"></span><span class="text">Vernon Office</span></a></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 852 3165 6361</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">neharosma200@gmail.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="" target="_blank">Neha</a></p>
          </div>
        </div>
      </div>
    </footer>
        
  


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

<!-- Modal softwere1-->
@foreach($office as $off)
<div class="modal fade" id="modal{{$off->id}}" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document" id="{{$off->id}}">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{$off->judul_off}}</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Rp. {{$off->harga_off}}</h3>
        <div class="modal-text">{{$off->isi_off}}<br></div>
        
      </div>
    </div>
  </div>
</div>
@endforeach


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
