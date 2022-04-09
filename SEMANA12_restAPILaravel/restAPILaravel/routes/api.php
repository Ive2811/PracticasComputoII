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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Listar todas las categorías.
Route::get('categories','App\Http\Controllers\CategoryController@index');

//Listar una categoría.
Route::get('category/{id}','App\Http\Controllers\CategoryController@show');

//Crear una nueva categoría.
Route::post('category','App\Http\Controllers\CategoryController@store');

//Actualizar una categoría.
Route::put('category','App\Http\Controllers\CategoryController@store');

//Eliminar una categoría.
Route::delete('category/{id}','App\Http\Controllers\CategoryController@destroy');