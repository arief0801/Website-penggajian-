<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| return view ke tampilan redirect ke data base 
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});


Route::resource('/karyawan','KaryawanController');

Route::resource('/jabatan', 'JabatanController');

Route::resource('/potongan', 'PotonganController');

Route::resource('/absensi', 'AbsensiController');

Route::resource('/gaji', 'GajiController');



Route::get('/home', 'HomeController@index')->name('home');
  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', 'DashboardController@index');
    
