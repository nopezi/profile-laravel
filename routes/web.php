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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index');

Route::get('/login', function () {
	return "hai, tes tes dolo";
});

// Route::get('tes', function () {
// 	return view('coba');
// });

Route::get('dosen', 'DosenController@index');
Route::get('terjemah', 'DosenController@terjemah');
Route::get('bot/telegram', 'TelegramController@index');
Route::post('bot/telegram/hook', 'TelegramController@hook');
Route::get('bot/telegram/webhook', 'TelegramController@webhook');
Route::get('bot/telegram/kirim_pesan', 'TelegramController@kirim_pesan');

// Route::get('/pegawai/{nama}', 'PegawaiController@index');
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

// Route::get('tes', 'TesController@index');

// Route::group(['namespace' => 'Modules\Tes\Http\Controllers'], function(){
// 	Route::get('/tes', 'TesController@index');
// });

// Route::prefix('tes')->group(function(){
// 	Route::get('/', 'Modules\Tes\Controllers\TesController@index');
// });
// Auth::routes(
// 	[
// 		'register' => false,
// 		'login' => false
// 	]
// );

# url api
Route::middleware(['basicAuth'])->group(function (){
	Route::get('api/pegawai', 'Api\PegawaiApi@index');
	Route::get('api/posting', 'Api\PostingApi@index');
	Route::get('api/profil', 'Api\ProfilApi@index');
});

// Route::get('/admin', 'HomeController@index')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
