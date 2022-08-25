<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi'; 
      protected $primaryKey = 'id_transaksi'; 
         protected $fillable = ['id_transaksi','id_montir','jenis_service','total_biaya','tanggal'];  
}

