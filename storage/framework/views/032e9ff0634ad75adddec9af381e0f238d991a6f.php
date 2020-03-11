<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ms Office</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(url('assets/css/open-iconic-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/animate.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(url('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/magnific-popup.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(url('assets/css/aos.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(url('assets/css/ionicons.min.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(url('assets/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/icomoon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/fontawesome/css/font-awesome.min.css')); ?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js" integrity="sha256-7zqZLiBDNbfN3W/5aEI1OX/5uvck9V0yhwKOA9Oe49M=" crossorigin="anonymous"></script>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                        
                    <div class="text-center text-dark">
                        <h2>Edit data</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php $__currentLoopData = $office; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $off): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <form action="/tampil/edited/<?php echo e($off->id_off); ?>"method="post">
                            
                            <input type="text" name="judul_off"value="<?php echo e($off->judul_off); ?>">
                            <input type="text" name="gambar_off"value="<?php echo e($off->gambar_off); ?>">
                            <input type="text" name="harga_off"value="<?php echo e($off->harga_off); ?>">
                            <input type="text" name="isi_off"value="<?php echo e($off->isi_off); ?>">


                            
                           
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                    </div>
             
                            </form>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>      

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   

    </div>     
  </body>
</html>
                            <form method="post" action="/tampil/update/<?php echo e($office->id_off); ?>"><?php /**PATH C:\xampp\htdocs\project\resources\views/office_edit.blade.php ENDPATH**/ ?>