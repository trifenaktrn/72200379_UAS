<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mahasiswa/all', 'MahasiswaAPIController@all');

Route::post('/mahasiswa/add', 'MahasiswaAPIController@add');

Route::put('/mahasiswa/update', 'MahasiswaAPIController@update');

Route::delete('/mahasiswa/delete/{id}', 'MahasiswaAPIController@delete');