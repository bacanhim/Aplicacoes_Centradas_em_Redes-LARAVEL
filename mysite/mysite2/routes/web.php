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
# start
/* Route::get('/', function () {
  $tasks= [
    ' go to store',
    ' go to market',
    ' go to work'
  ];

  return view('welcome', [
    'text' => 'ACR',
    'title' => request('title'),
    'tasks' => $tasks
    ]);
});

Route::get('/contact', function () {
  return view('contact');
});
Route::get('/about', function () {
  return view('about');
}); */



# controllers
Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');


Route::resource('projects', 'ProjectsController');