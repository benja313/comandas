<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
  protected $table = 'venta';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'monto', 'fecha', 'hora',
  ];
  

}
