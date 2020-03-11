<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Programmer</title>
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
                        <h2>Edit data</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($programming as $pg)
                            <form action="/tampil/editedpg/{{$pg->id}}"method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                Judul:<input type="text" class="form-control"name="judul_pg"value="{{$pg->judul_pg}}">
                            </div>    
                            <div class="form-group">
                                Gambar<input type="text"class="form-control" name="gambar_pg"value="{{$pg->gambar_pg}}">    
                            </div>
                            <div class="form-group">
                                Harga:<input type="text" class="form-control"name="harga_pg"value="{{$pg->harga_pg}}">    
                            </div>
                            <div class="form-group">
                                isi<textarea class="form-control" name="isi_pg">{{$pg->isi_pg}}</textarea> 
                            </div>
                            


                            
                           
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                    </div>
             
                            </form>
                            @endforeach
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
                            