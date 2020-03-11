@extends('layouts.app')
@section('content')
  
  
	  <section class="site-blocks-cover inner-page-cover overlay warna" data-stellar-background-ratio="0.5" style="background-position: 50% -1px">
	  	<div class="container">
        <div class="row align-items-center">
          <div class="col">
            <div class="text-center">
              <h1>Kontak</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
		
<section class="ftco-section ftco-project bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
      <div class="jumbotron">
        <div class="text-dark text-center">
          <h2>
            Kontak 
          </h2>
        </div>
        <div class="row">
        <div class="col-md-6">
          <ul>
            <li class="text-dark">Telp: 0341-2143</li>
            <li class="text-dark">WhatsApp: 0852 3165 6361</li>
          </ul>
        </div>
      
      <div class="col-md-6">
        <div class="text-dark h6">
                        Alamat: <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3902440083257!2d112.63561631398973!3d-7.958561681508912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629fd8a18e1d3%3A0x1b94e3d899eab985!2sVERNON%20OFFICE!5e0!3m2!1sid!2sid!4v1581474499088!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    
                        </div>
      </div>
      </div>
      </div>
    </div>
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
              <h2 class="ftco-heading-2">Software</h2>
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


@endsection