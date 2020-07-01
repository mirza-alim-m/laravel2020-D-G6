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
Route::put('dosen/ubah', 'API\DosensController@update');
Route::delete('dosen/hapus/{dosens}', 'API\DosensController@destroy');
Route::post('login', 'Auth\LoginController@apilogin');
Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'Auth\LoginController@apilogout');
    Route::get('user', function (Request $request) {
        return $request->user();
    });
});
