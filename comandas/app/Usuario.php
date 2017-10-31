<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $table = 'usuario';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'rut', 'id_cargo',
  ];
  
  public function cargos() {
    return $this->hasMany(Cargo::class, 'id_cargo');
  }

}
