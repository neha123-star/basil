<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programming extends Model
{
    protected $table="programming";
    protected $fillable = ['id','judul_pg','harga_pg','isi_pg'];
}
