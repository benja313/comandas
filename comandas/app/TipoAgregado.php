<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAgregado extends Model
{
  protected $table = 'tipoagregado';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'descripcion',
  ];

}
