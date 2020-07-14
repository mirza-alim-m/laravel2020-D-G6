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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/', function ()
{
    return response()->json(['message' => 'Halo']);
});
Route::get('dosen', 'API\DosensController@index');
Route::get('dosen/siapa/{dosens}', 'API\DosensController@show');
Route::post('dosen/tambah', 'API\DosensController@store');
Route::put('dosen/ubah/{dosens}', 'API\DosensController@update');
Route::delete('dosen/hapus/{dosens}', 'API\DosensController@destroy');
Route::get('Mk', 'API\MkController@index');
Route::get('Mk/apa/{mk}', 'API\MkController@show');
Route::post('Mk/tambah', 'API\MkController@store');
Route::put('Mk/ubah/{mk}', 'API\MkController@update');
Route::delete('Mk/hapus/{mk}', 'API\MkController@destroy');
Route::get('Jam_Kuliah', 'API\JamKuliahController@index');
Route::get('Jam_Kuliah/kapan/{jam_kuliah}', 'API\JamKuliahController@show');
Route::post('Jam_Kuliah/tambah', 'API\JamKuliahController@store');
Route::put('Jam_Kuliah/ubah/{jam_kuliah}', 'API\JamKuliahController@update');
Route::delete('Jam_Kuliah/hapus/{jam_kuliah}', 'API\JamKuliahController@destroy');
Route::get('Ruang', 'API\RuangController@index');
Route::get('Ruang/apa/{ruang}', 'API\RuangController@show');
Route::post('Ruang/tambah', 'API\RuangController@store');
Route::put('Ruang/ubah/{ruang}', 'API\RuangController@update');
Route::delete('Ruang/hapus/{ruang}', 'API\RuangController@destroy');
Route::post('login', 'Auth\LoginController@apilogin');
Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'Auth\LoginController@apilogout');
    Route::get('user', function (Request $request) {
        return $request->user();
    });
});
