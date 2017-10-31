<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('acompannamientos', 'AcompannamientoController');
Route::resource('agregados', 'AgregadoController');
Route::resource('cargos', 'CargoController');
Route::resource('comandas', 'ComandaController');
Route::resource('menuComandas', 'MenuComandaController');
Route::resource('menus', 'MenuController');
Route::resource('mesas', 'MesaController');
Route::resource('tipoAgregados', 'TipoAgregadoController');
Route::resource('usuarios', 'UsuarioController');
Route::resource('ventas', 'VentaController');