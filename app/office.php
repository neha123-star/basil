<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class office extends Model
{
    protected $table="office";
     protected $fillable = ['id','judul_off','gambar_off','harga_off','isi_off'];
}
