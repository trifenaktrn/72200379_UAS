<?php

Route::get('/home', function () {
    return view('home', ['cek' => 'home']);
});
Route::get('/mahasiswa', 'MahasiswaController@mahasiswa')->middleware('auth');
Route::get('/mahasiswa/cari','MahasiswaController@pencarian');
Route::get('/mahasiswa/form_mhs','MahasiswaController@form_mhs');
Route::post('/mahasiswa/simpanmahasiswa','MahasiswaController@simpanmahasiswa');
Route::get('/mahasiswa/updatemhs/{id}','MahasiswaController@updatemhs');
Route::put('/mahasiswa/simpanupdate/{id}','MahasiswaController@simpanupdate');
Route::get('/mahasiswa/deletemhs/{id}','MahasiswaController@deletemhs');

Route::get('/user', 'AuthController@user')->middleware('auth');
Route::get('/user/formuser', 'AuthController@formuser')->middleware('auth');
Route::post('/user/simpanuser', 'AuthController@simpanuser')->middleware('auth');
Route::get('/user/updateuser/{id}','AuthController@updateuser');
Route::put('/user/simpanupdate_user/{id}','AuthController@simpanupdate_user');

Route::get('/user/deleteuser/{id}','AuthController@deleteuser');

Route::get('/','AuthController@login')->middleware('guest')->name('login');
Route::post('/user/ceklogin','AuthController@ceklogin')->middleware('guest');

Route::get('/logout','AuthController@logout')->middleware('auth');

