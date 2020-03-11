<!DOCTYPE html>
<html>
<head>
  <title>Basil</title>

    <link rel="stylesheet" href="<?php echo e(url('assets/css/open-iconic-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/animate.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(url('assets/css/owl.carousel.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(url('assets/css/icomoon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/fontawesome/css/font-awesome.min.css')); ?>" />
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
                        <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item ">
                                <a class="nav-link"  data-toggle="modal" data-target="#signin" href="" class="nav-link "><?php echo e(__('Masuk')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="modal" data-target="#signup" href="" class="nav-link"><?php echo e(__('Daftar')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                           
                            <li class="nav-item ">
                                <a id="navbar" class="nav-link" href="#" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <i class="fa fa-user"></i>   <?php echo e(Auth::user()->name); ?>   <span class="caret"></span>
                                </a>
                                </li>
                                 <li class="nav-link">
                              <a class="nav-link text-danger" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <label class="text-danger"><?php echo e(__('Keluar')); ?></label>
                                    </a>
                            </li>
                            <li>
                                
                               <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                </form>

                            </li>
                        <?php endif; ?>
                    </ul>
  
          </div>
        </div>
      </nav>  

  	  <section id="home-section js-fullheight" class="hero">
		  <div class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
      	<div class="one-third order-md-last img js-fullheight" style="background-image:url('<?php echo e(url('assets/images/bg_1.jpg')); ?>');">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Selamat Datang di Basil</span>
			            <h1 class="mb-4 mt-3">Fokus pada software yeng anda butuhkan</h1>
			            <p>Menyediakan semua jenis software mulai dari microsoft office, software untuk programmer, software untuk Desain Grafis.</p>		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>
		

    <section class="ftco-section ftco-no-pb ftco-no-pt ftco-services bg-light">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"> Microsoft Office</a>

              <a class="nav-link px-4" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"> Programming

              <a class="nav-link px-4" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Desain</a>

            </div>
          </div>
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
            
            <div class="tab-content pl-md-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-5" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                <h2 class="mb-4">Microsoft Office</h2>
                <p>Menyedikanan Software Ms Office</p>
                <p>Butuh software untuk kantor, ada di sini. Menyediakn berbagi macam software untuk perkantoran.</p>
                <p><a href="/tampil/office" class="btn btn-primary px-4 py-3">Lihat Produk</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                <h2 class="mb-4">Programming</h2>
                <p>Menyediakan berbagai macam software untuk para programmer</p>
                <p>Butuh software untuk ebuat progra, ada di sini. berbagi aca kebutukan software programing nda.</p>
                <p><a href="/tampil/programming" class="btn btn-primary px-4 py-3">Lihat detail produk</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                <h2 class="mb-4">Desain Grafis</h2>
                <p>Software desain grafis yang anda butuhkan ada di sini</p>
                <p>Butuh software untuk membuat desain, ada di sini. Berbagai macam kebutuhan software desain ada di sini.</p>
                <p><a href="/tampil/desain" class="btn btn-primary px-4 py-3">Lihat detail produk</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-2 img mb-5" style="background-image: url('<?php echo e(url('assets/images/bg_3.jpg')); ?>');">
     
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-12">
    						<a href="/tampil/about" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Harga lebih ramah dikantong</h2>
    						</a>
                <a href="/tampil/about" class="services-wrap ftco-animate">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="ion-ios-arrow-back"></span>
                    <span class="ion-ios-arrow-forward"></span>
                  </div>
                  <h2>Lebih udah dalam pembayaran</h2>
                </a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Lebih nyaman</h2>
    						</a>
    						<a href="/tampil/about" class="services-wrap ftco-animate">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="ion-ios-arrow-back"></span>
                    <span class="ion-ios-arrow-forward"></span>
                  </div>
                  <h2>Kualitas yang terjamin</h2>
                </a>
    						<a href="/tempil/about" class="services-wrap ftco-animate">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="ion-ios-arrow-back"></span>
                    <span class="ion-ios-arrow-forward"></span>
                  </div>
                  <h2>Keamanan dalam transaksi</h2>
                </a>
                <a href="/tampil/about" class="services-wrap ftco-animate">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="ion-ios-arrow-back"></span>
                    <span class="ion-ios-arrow-forward"></span>
                  </div>
                  <h2>Kesalian Software</h2>
                </a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

   


          <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo e(url('assets/images/9.png')); ?>" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="text-light">
                    <h5 class="text-light">Ms Office</h5>
                    <p>Menyediakan software untuk Ms Ofiice </p></div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo e(url('assets/images/2.png')); ?>" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="text-light">
                    <h5 class="text-light">Programming</h5>
                    <p>Menyediakan software untuk programming baik pemula maupun pprofesiaonal</p></div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo e(url('assets/images/h.png')); ?>" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="text-light">
                    <h5 class="text-light">Desain Grafis</h5>
                    <p>Menyediakan aoftware untuk Desain Grafis baik pemula maupun profesional</p>
                  
                      </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

	 <section class="ftco-section ftco-project bg-light" >
      <div class="container px-md-5">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Basil</h2>
            <p>temukan software yang anda butuhkan hanya di basil, berbagai macam software ada di sini. Mulai dari software perkantoran office, dan desain grafis</p>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="" target="_blank">Neha</a></p>          </div>
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
        <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                           
                            <div class="col-md-12">
                                <input id="email"  placeholder="Email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password"placeholder="Password"type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary   btn-lg btn-block">
                                    <?php echo e(__('Masuk')); ?>

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
        <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                           
                            <div class="col-md-12">
                                <input id="name" placeholder="Nama anda" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email"  placeholder="Email">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-12">
                                <input id="password" placeholder="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                    <?php echo e(__('Daftar')); ?>

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


  <script src="<?php echo e(url('assets/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/js/jquery-migrate-3.0.1.min.js')); ?>"></script>

  <script src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/js/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/js/jquery.stellar.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/js/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/js/aos.js')); ?>"></script>
  <script src="<?php echo e(url('assets/js/scrollax.min.js')); ?>"></script>
  
  <script src="<?php echo e(url('assets/js/main.js')); ?>"></script>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/index.blade.php ENDPATH**/ ?>