<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Desain</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="{{url('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/fontawesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    
    
  </head>
  <body>
    <div class="container">
        <a href="/tampil/lihatds"><h2 class="text-primary"><i class="fa fa-arrow-circle-left"></i></h2></a>
       
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                        
                    <div class="text-center text-dark">
                        <h2>Tambah Data</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="/tampil/storeds"enctype="multipart/form-data">
                                {{ csrf_field() }}
             
                                    <div class="form-group">
                                        <label class="text-dark">judul</label>
                                        <input type="text" name="judul_ds" class="form-control" placeholder="masukkan judul_ds">
             
                                        @if($errors->has('judul_ds'))
                                            <div class="text-danger">
                                                {{ $errors->first('judul_ds')}}
                                            </div>
                                        @endif
             
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark">gambar</label><br>
                                        <input type="file" name="gambar_ds" >
             
                                         @if($errors->has('gambar_ds'))
                                            <div class="text-danger">
                                                {{ $errors->first('gambar_ds')}}
                                            </div>
                                        @endif
             
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark">harga</label>
                                        <input type="text" name="harga_ds" class="form-control" placeholder="masukkan harga_ds">
             
                                        @if($errors->has('harga_ds'))
                                            <div class="text-danger">
                                                {{ $errors->first('harga_ds')}}
                                            </div>
                                        @endif
             
                                    </div>
             
                                    <div class="form-group">
                                        <label class="text-dark">isi</label>
                                        <textarea name="isi_ds" class="form-control" placeholder="masukkan isi_ds"></textarea> 
             
                                         @if($errors->has('isi_ds'))
                                            <div class="text-danger">
                                                {{ $errors->first('isi_ds')}}
                                            </div>
                                        @endif
             
                                    </div>
             
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                    </div>
             
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
  </body>
</html>