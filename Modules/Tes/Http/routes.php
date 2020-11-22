<?php

Route::group(['middleware' => 'web', 'prefix' => 'tes', 'namespace' => 'Modules\Tes\Http\Controllers'], function()
{
    Route::get('/', 'TesController@index');
    Route::get('/tambah', 'TesController@tambah');
    Route::post('/store', 'TesController@store');
    Route::get('/edit/{id}', 'TesController@edit');
    Route::post('/update', 'TesController@update');
    Route::get('/hapus/{id}', 'TesController@hapus');
    Route::get('/cari', 'TesController@cari');
});
