<?php

use Illuminate\Database\Seeder;

class tipo_agregadoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               \DB::table('menu')->insert([
      'id' => 1,
  		'nombre' => 'agregados alimentos',
      'descripcion' => 'alimentos varios',
    
      ]);
              \DB::table('menu')->insert([
      'id' => 2,
  		'nombre' => 'bebidas',
      'descripcion' => 'bebidas de fantacia y alcoholicas',
    
      ]);
    }
}
