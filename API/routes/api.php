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
Route::resource('photo', 'FacturaController');
/*Route::get('facturas', 'FacturaController@index');
Route::get('facturas/{id}', 'FacturaController@show');
Route::post('facturas', 'FacturaController@store');
Route::put('facturass/{id}', 'FacturaController@update');
Route::delete('facturas/{id}', 'FacturaController@delete');*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
