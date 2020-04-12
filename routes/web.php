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

Route::resource('/dosens', 'DosensController');
Route::get('/caridosen', 'DosensController@search')->name('caridosen');
Route::get('/caridosen-matkul', 'DosensController@carimatakuliah')->name('caridosen-matkul');
// Route::post('/dosens/tambah', 'DosensController@store');