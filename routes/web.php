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
Route::get('/', 'HomeController@index')->name('home');

//Routes Ducks
Route::get('/ducks', 'DuckController@ShowDucks')->name('ducks');
Route::get('/createDuck', 'DuckController@create')->name('createDuck');
Route::post('/storeDuck', 'DuckController@store')->name('storeDuck');
Route::post('/editDuck/{id}', 'DuckController@edit')->name('editDuck');
Route::post('/updateDuck/{id}', 'DuckController@update')->name('updateDuck');
Route::post('/deleteDuck/{id}', 'DuckController@delete')->name('deleteDuck');

//Routes Breeds
Route::get('/breeds', 'BreedController@ShowBreeds')->name('breeds');
Route::get('/createBreed', 'BreedController@create')->name('createBreed');
Route::post('/storeBreed', 'BreedController@store')->name('storeBreed');
Route::post('/editBreed/{id}', 'BreedController@edit')->name('editBreed');
Route::post('/updateBreed/{id}', 'BreedController@update')->name('updateBreed');
Route::post('/deleteBreed/{id}', 'BreedController@delete')->name('deleteBreed');