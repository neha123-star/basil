<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ms Office</title>
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
        <a href="/tampil/lihatpg"><h2 class="text-primary"><i class="fa fa-arrow-circle-left"></i></h2></a>
       
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                        
                    <div class="text-center text-dark">
                        <h2>Tambah Data</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="/tampil/storepg"enctype="multipart/form-data">
                                {{ csrf_field() }}
             
                                    <div class="form-group">
                                        <label class="text-dark">judul</label>
                                        <input type="text" name="judul_pg" class="form-control" placeholder="masukkan judul_pg">
             
                                        @if($errors->has('judul_pg'))
                                            <div class="text-danger">
                                                {{ $errors->first('judul_pg')}}
                                            </div>
                                        @endif
             
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark">gambar</label>
                                        <input type="file" name="gambar_pg">
             
                                         @if($errors->has('gambar_pg'))
                                            <div class="text-danger">
                                                {{ $errors->first('gambar_pg')}}
                                            </div>
                                        @endif
             
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark">harga</label>
                                        <input type="text" name="harga_pg" class="form-control" placeholder="masukkan harga_pg">
             
                                        @if($errors->has('harga_pg'))
                                            <div class="text-danger">
                                                {{ $errors->first('harga_pg')}}
                                            </div>
                                        @endif
             
                                    </div>
             
                                    <div class="form-group">
                                        <label class="text-dark">isi</label>
                                        <textarea name="isi_pg" class="form-control" placeholder="masukkan isi_pg"></textarea> 
             
                                         @if($errors->has('isi_pg'))
                                            <div class="text-danger">
                                                {{ $errors->first('isi_pg')}}
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