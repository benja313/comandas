<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agregado extends Model
{
  protected $table = 'agregado';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'descripcion', 'id_tipo_agregado',
  ];
  
  public function mesa() {
    return $this->hasMany(Mesa::class, 'id_tipo_agregado');
  }

}
