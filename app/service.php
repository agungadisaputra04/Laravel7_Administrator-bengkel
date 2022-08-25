<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = 'service'; 
      protected $primaryKey = 'id_service'; 
         protected $fillable = ['id_service','nama','keterangan','harga'];  
}
