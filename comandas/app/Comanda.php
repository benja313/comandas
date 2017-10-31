<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
  protected $table = 'comanda';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'entregado', 'id_usuario', 'id_venta', 'id_mesa',
  ];
  
  public function usuario() {
    return $this->hasMany(Usuario::class, 'id_usuario');
  }
  public function venta() {
    return $this->hasMany(Venta::class, 'id_venta');
  }
  public function mesa() {
    return $this->hasMany(Mesa::class, 'id_mesa');
  }

}