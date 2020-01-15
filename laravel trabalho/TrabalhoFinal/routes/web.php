<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/public/ver-filmes', 'FilmesController@index');
Route::get('/public/ver-series', 'SeriesController@index');
Route::get('/private/create-filme', 'FilmesController@create');
Route::get('/private/create-serie', 'SeriesController@create');
Route::post('/private/filmes/store', 'FilmesController@store');
Route::post('/public/ver-filmes', 'FilmesController@search');
Route::post('/public/ver-series', 'SeriesController@search');
Route::get('/public/{id}', 'FilmesController@show');
Route::get('/public/{id}', 'SeriesController@show');
Route::get('/private-filmes/{id}/edit', 'FilmesController@edit');
Route::delete('/private-filmes/{id}', 'FilmesController@destroy');
Route::patch('/private-filmes/{id}', 'FilmesController@update');
Route::get('/private-series/{id}/edit', 'SeriesController@edit');
Route::delete('/private-series/{id}', 'SeriesController@destroy');
Route::patch('/private-series/{id}', 'SeriesController@update');
Route::post('/private/series/store', 'SeriesController@store');


