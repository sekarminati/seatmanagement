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

Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/logout',  function () {
    return view('auth.login');});

Route::get('/home', 'DashboardController@index')->name('home');

Route::get('/mahasiswa','MahasiswaController@index');

Route::post('/mahasiswa/create','MahasiswaController@create');

Route::get('/mahasiswa/search','MahasiswaController@search');

Route::get('/mahasiswa/{id}/edit','MahasiswaController@edit');

Route::post('/mahasiswa/{id}/update','MahasiswaController@update');

Route::get('/hadir','TamuController@index');

Route::get('/kursi', 'KursiController@tambahkursi');

Route::post('/kursi/update', 'KursiController@cek');

Route::get('/', 'KursiController@scan');

Route::get('/test', 'KursiController@print');