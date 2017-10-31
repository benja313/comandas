<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
  protected $table = 'cargo';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'descripcion',
  ];
  

}
