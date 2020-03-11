<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ms Office</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo e(url('assets/css/icomoon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/fontawesome/css/font-awesome.min.css')); ?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    
    
  </head>
  <body>
    
    <div class="container">
        <a href="/tampil/lihatoff"><h2 class="text-primary"><i class="fa fa-arrow-circle-left"></i></h2></a>
       
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                        
                    <div class="text-center text-dark">
                        <h2>Edit data</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php $__currentLoopData = $office; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $off): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <form action="/tampil/edited/<?php echo e($off->id); ?>"method="post">
                            <?php echo e(csrf_field()); ?>

                             <?php echo e(method_field('PUT')); ?>

                            <div class="form-group">
                                Judul:<input type="text" class="form-control"name="judul_off"value="<?php echo e($off->judul_off); ?>">
                            </div>    
                            <div class="form-group">
                                Gambar<input type="text"class="form-control" name="gambar_off"value="<?php echo e($off->gambar_off); ?>">    
                            </div>
                            <div class="form-group">
                                Harga:<input type="text" class="form-control"name="harga_off"value="<?php echo e($off->harga_off); ?>">    
                            </div>
                            <div class="form-group">
                                isi<textarea class="form-control" name="isi_off"><?php echo e($off->isi_off); ?></textarea> 
                            </div>
                            


                            
                           
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
                            <?php /**PATH C:\xampp\htdocs\project\resources\views/editoff.blade.php ENDPATH**/ ?>