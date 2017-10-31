<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuComanda extends Model
{
  protected $table = 'menu_comnada';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'comentario', 'id_menu', 'id_agregado', 'id_comanda',
  ];
  
  public function menu() {
    return $this->hasMany(Menu::class, 'id_menu');
  }
  public function agregado() {
    return $this->hasMany(Agregado::class, 'id_agregado');
  }
  public function comanda() {
    return $this->hasMany(Comanda::class, 'id_comanda');
  }

}
