<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class desain extends Model
{
    protected $table="desain";
     protected $fillable = ['id','judul_ds','harga_ds','isi_ds'];
}
