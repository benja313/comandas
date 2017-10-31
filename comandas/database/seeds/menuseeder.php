<?php

use Illuminate\Database\Seeder;

class menuseeder extends Seeder
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
  		'nombre' => 'filete',
      'descripcion' => 'filete punto cualquiera',
    
      ]);

              \DB::table('menu')->insert([
      'id' => 2,
  		'nombre' => 'salmon',
      'descripcion' => 'salmon a la plancha',
    
      ]);
             \DB::table('menu')->insert([
      'id' => 3,
  		'nombre' => 'pollo',
      'descripcion' => 'pollo a la plancha',
    
      ]);
             \DB::table('menu')->insert([
      'id' => 4,
  		'nombre' => 'chuletas de cordero',
      'descripcion' => 'chuletas cordero',
    
      ]);
    }
}
