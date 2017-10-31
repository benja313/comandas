<?php

use Illuminate\Database\Seeder;

class agregadoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('agregado')->insert([
      'id' => 1,
  		'nombre' => 'porotos verdes',
      'descripcion' => 'portos al vapor',
      'id_tipo_agregado' => '1',
      ]);
               \DB::table('agregado')->insert([
      'id' => 2,
  		'nombre' => 'champiñones',
      'descripcion' => 'champiñones salteados',
      'id_tipo_agregado' => '1',
      ]);
                     \DB::table('agregado')->insert([
      'id' =>31,
  		'nombre' => 'pollo',
      'descripcion' => '200g de pollo',
      'id_tipo_agregado' => '1',
      ]);
              \DB::table('agregado')->insert([
      'id' => 5,
  		'nombre' => 'Vino tinto',
      'descripcion' => 'vino tinto a eleccion',
      'id_tipo_agregado' => '2',
      ]);
                \DB::table('agregado')->insert([
      'id' => 6,
  		'nombre' => 'bebida de fantasia',
      'descripcion' => 'variedades',
      'id_tipo_agregado' => '2',
      ]);
               \DB::table('agregado')->insert([
      'id' => 7,
  		'nombre' => 'jugos',
      'descripcion' => 'variedades',
      'id_tipo_agregado' => '2',
      ]);
    }
}
