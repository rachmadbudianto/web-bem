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

Route::get('/bem/welcome', 'PagesController@index');
Route::get('/struktur/struktur', 'StrukturController@index'); //indexnya truktur

Route::get('/image/{images}', 'StrukturController@show'); //show untuk edit


Route::get('/crud/editstruktur', 'StrukturController@edit');

Route::post('/struktur/struktur', 'StrukturController@store');

Route::get('/bem/about', 'PagesController@about');

Route::get('/bem/contact', 'PagesController@contact');

Route::get('/crud/create', 'StrukturController@create');


/*
|--------------------------------------------------------------------------
| Route Untuk Kepengurusan
*/


/*
| End Kepengurusan
|------------------------------------------------------------------------*/
