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

// Route::get('/buat-pertanyaan', 'PertanyaanController@index');	


Route::get('/materi', 'SoalController@index');

// Route::get('/materi/{id}/kerjakan-soal','SoalController@jawab');

Route::get('/jawab/{id}', 'SoalController@jawabSoal');

Route::get('/next-soal/{id}', 'SoalController@nextSoal');

Route::get('/selesai', 'SoalController@selesai');

Route::get('/', 'DashboardController@index');

Route::get('/garap-soal', 'SoalController@garap');

Route::post('/attemp-now', 'SoalController@jwb');

Route::get('/lihat-artikel/{id}', 'ArtikelController@lihat');

Route::get('/soal-latihan', 'SoalController@indexTipe');

Route::get('/soal-latihan/{id}', 'SoalController@jawab');

Route::get('/penyakit', 'PenyakitController@index');

//===||login ADMIN||===// 

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {

    Route::get('/index', 'AutentikasiController@role');

    Route::get('/buka-materi', 'SoalController@indexAdmin');

    Route::get('/buat-materi', 'MateriController@index');

    Route::get('/buka-soal', 'SoalController@AdminSoal');

    Route::get('/buka-penyakit', 'PenyakitController@AdminPenyakit');

    Route::get('/buka-soal/{id}', 'PertanyaanController@indexAdmin');

    Route::get('/buka-soal/{id}/buat', 'PertanyaanController@Index');

    Route::get('/materi/{id}/lihat', 'PertanyaanController@indexAdmin');


    Route::post('/buat-soal', 'PertanyaanController@create');

    Route::post('/buat-materi-baru', 'MateriController@create');

    Route::get('/tambah-artikel/{id}', 'ArtikelController@indexBuat');

    Route::get('/edit-artikel/{id}', 'ArtikelController@edit');

    Route::post('/send-editing-article', 'ArtikelController@update');

    Route::post('/send-article', 'ArtikelController@create');

    Route::get('/edit-soal/{id}', 'PertanyaanController@edit');

    Route::post('/update-soal', 'PertanyaanController@update');

    Route::get('/delete-soal/{id}', 'PertanyaanController@delete');
});


// LOGIN


Route::get('/login', 'AutentikasiController@index');

Route::post('/postlogin', 'AutentikasiController@postlogin');

Route::get('/logout', 'AutentikasiController@logout');

Route::get('/daftar', 'AutentikasiController@registerIndex');

Route::post('/postregister', 'AutentikasiController@registrasi');
