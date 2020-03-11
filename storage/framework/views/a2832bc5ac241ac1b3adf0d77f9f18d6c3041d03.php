<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Desain</title>
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
     <a href="/tampil/lihatds"><h2 class="text-primary"><i class="fa fa-arrow-circle-left"></i></h2></a>
                    
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <div class="text-center text-dark">
                        <h2>Edit data</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php $__currentLoopData = $desain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <form action="/tampil/editedds/{$ds->id}"method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                Judul:<input type="text" class="form-control"name="judul_ds"value="<?php echo e($ds->judul_ds); ?>">
                            </div>    
                            <div class="form-group">
                                Gambar<input type="file"class="form-control" name="gambar_ds"value="<?php echo e($ds->gambar_ds); ?>">    
                            </div>
                            <div class="form-group">
                                Harga:<input type="text" class="form-control"name="harga_ds"value="<?php echo e($ds->harga_ds); ?>">    
                            </div>
                            <div class="form-group">
                                isi<textarea class="form-control" name="isi_ds"><?php echo e($ds->isi_ds); ?></textarea> 
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
                            <?php /**PATH C:\xampp\htdocs\project\resources\views/editds.blade.php ENDPATH**/ ?>