<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Use App\Producto;

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('productos', 'ProductoController@index');
	Route::get('productos/consultar/{producto}', 'ProductoController@show');
});

Route::post('users','UserController@store');
Route::post('login','UserController@login');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
