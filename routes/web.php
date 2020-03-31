<?php

use Illuminate\Support\Facades\Route;

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
//route CRUD
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen','DosenController@index');

Route::get('/dosen/tambah','DosenController@tambah');

Route::post('/dosen/store','DosenController@store');

Route::get('/dosen/edit/{id}','DosenController@edit');

Route::post('/dosen/update','DosenController@update');

Route::get('/dosen/hapus/{id}','DosenController@hapus');