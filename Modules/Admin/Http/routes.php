<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::get('/', 'AdminController@index')->middleware('auth');
    
    /* PROFILE */
    Route::get('/profile', 'ProfileController@index')->middleware('auth');
    Route::post('/profile/update', 'ProfileController@update')->middleware('auth');
    Route::post('/profile/ganti_foto', 'ProfileController@ganti_foto')->middleware('auth');

    /* POSTING */
    Route::get('/posting/{id}', 'PostingController@index')->middleware('auth');

    /* JENIS POSTING */
    Route::get('/jenis_posting/', 'JenispostingController@index')->middleware('auth');
    Route::post('/jenis_posting/tambah', 'JenispostingController@store')->middleware('auth');
    Route::post('/jenis_posting/update/{id}', 'JenispostingController@update')->middleware('auth');
    Route::get('/jenis_posting/hapus/{id}', 'JenispostingController@hapus')->middleware('auth');

    Route::get('/tes', 'TesController@index')->middleware('auth');
});
