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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::resource('/dosens', 'DosensController');
Route::resource("ruang", "RuangController");
Route::resource("mata_kuliah", "MkController");
Route::get('dosensdata', 'DosensController@json')->name('datatables.dosens');
Route::get('matkuldata', 'MkController@json')->name('datatables.matkul');
Route::get('/caridosen', 'DosensController@search')->name('caridosen');
Route::get('/caridosen-matkul', 'DosensController@carimatakuliah')->name('caridosen-matkul');

// Route::match(["GET", "POST"], "/register", function(){
//     return redirect("/login");
//     })->name("register");

// Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/dosens/tambah', 'DosensController@store');
