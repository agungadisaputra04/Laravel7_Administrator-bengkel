<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class montir extends Model
{
    protected $table = 'montir'; 
      protected $primaryKey = 'id_montir'; 
         protected $fillable = ['id_montir','nama','alamat','jenis_kelamin','no_hp','email'];  
}
