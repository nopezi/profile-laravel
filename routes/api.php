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

// Route::middleware('auth:api')->group(function () {

// 	Route::get('/pegawai', 'Api\PegawaiApi@index');
// 	Route::get('/posting', 'Api\PostingApi@index');
// 	Route::get('/profil', 'Api\ProfilApi@index');

// });

# url api
Route::middleware(['basicAuth'])->group(function (){
	Route::get('/pegawai', 'Api\PegawaiApi@index');

	Route::get('/posting', 'Api\PostingApi@index');
	Route::post('/posting/tambah', 'Api\PostingApi@tambah');
	Route::post('/posting/edit', 'Api\PostingApi@edit');
	Route::delete('/posting/hapus', 'Api\PostingApi@hapus');

	Route::get('/jenis_posting', 'Api\JenisPostingApi@index');

	Route::get('/profil', 'Api\ProfilApi@index');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});