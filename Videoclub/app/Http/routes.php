<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::resource('videos/generos','Peliculas\GenerosPelisController');
Route::resource('videos/productora','Peliculas\ProductoraController');
Route::resource('videos/pais','Peliculas\PaisPelisController');
Route::resource('videos/peliculas','Peliculas\PeliculasController');