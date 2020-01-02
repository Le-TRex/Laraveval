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

//Routes Users
Route::get('/users', 'UserController@ShowUsers')->name('users');
Route::get('/createUser', 'UserController@create')->name('createUser');
Route::post('/storeUser', 'UserController@store')->name('storeUser');
Route::post('/editUser/{id}', 'UserController@edit')->name('editUser');
Route::post('/updateUser/{id}', 'UserController@update')->name('updateUser');
Route::post('/deleteUser/{id}', 'UserController@delete')->name('deleteUser');

//Routes Roles
Route::get('/roles', 'RoleController@ShowRoles')->name('roles');
Route::get('/createRole', 'RoleController@create')->name('createRole');
Route::post('/storeRole', 'RoleController@store')->name('storeRole');
Route::post('/editRole/{id}', 'RoleController@edit')->name('editRole');
Route::post('/updateRole/{id}', 'RoleController@update')->name('updateRole');
Route::post('/deleteRole/{id}', 'RoleController@delete')->name('deleteRole');