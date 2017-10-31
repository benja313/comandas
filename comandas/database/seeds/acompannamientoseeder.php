<?php

use Illuminate\Database\Seeder;

class acompannamientoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('acompannamiento')->insert([
      'id' => 1,
  		'nombre' => 'pure',
      'descripcion' => 'pure clasico de papas',
      ]);
          \DB::table('acompannamiento')->insert([
      'id' => 2,
  		'nombre' => 'arroz',
      'descripcion' => 'arroz blanco',
      ]);
        \DB::table('acompannamiento')->insert([
      'id' => 3,
  		'nombre' => 'arroz primavera',
      'descripcion' => 'arroz con verduras',
      ]);
         \DB::table('acompannamiento')->insert([
      'id' => 4,
  		'nombre' => 'papas al hilo',
      'descripcion' => 'papas firtas delgadas',
      ]);
          \DB::table('acompannamiento')->insert([
      'id' => 5,
  		'nombre' => 'papas brabas',
      'descripcion' => 'papas rusticas con crema y merken',
      ]);
           \DB::table('acompannamiento')->insert([
      'id' => 6,
  		'nombre' => 'pure de champiñones',
      'descripcion' => 'pure de champiñones',
      ]);

    }
}
