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

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'FrontendController@index');
});
    Route::get('/halo', 'FrontendController@halo');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
  Route::resource ('kopetensi','KopetensiKeahlianController');
  Route::resource ('wali','WaliController');
   Route::resource ('murid','MuridController');
  Route::resource ('ortu','OrtuController');
  Route::resource ('standar','StandarKopetensiController');
  Route::resource ('bidang','BidangController');
 Route::resource ('siswa','SiswaController');
  Route::resource ('nilai','NilaiController');
 Route::resource ('guru','GuruController');

