<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MatpelController;
use App\Http\Controllers\KkmController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/app', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'checkRole:Admin'])->group(function () {
    
    Route::get('/guru', 'GuruController@index');
    Route::get('/guru/create', 'GuruController@create');
    Route::post('/guru', 'GuruController@store');
    Route::get('/guru/{guruModel}/edit', 'GuruController@edit');
    Route::delete('/guru/{guruModel}', 'GuruController@destroy');
    Route::patch('/guru/{guruModel}', 'GuruController@update');

    Route::get('/kursus', 'KursusController@index')->name('kursus');
    Route::get('/kursus/create', 'KursusController@create')->name('create-kursus');
    Route::post('/kursus', 'KursusController@store')->name('store-kursus');
    Route::get('/kursus/{kursusModel}/edit', 'KursusController@edit')->name('edit-kursus');
    Route::delete('/kursus/{kursusModel}', 'KursusController@destroy')->name('delete-kursus');
    Route::patch('/kursus/{kursusModel}', 'KursusController@update')->name('update-kursus');
    
    Route::get('/siswa', 'SiswaController@index');
    Route::get('/siswa/create', 'SiswaController@create');
    Route::post('/siswa', 'SiswaController@store');
    Route::get('/siswa/{siswaModel}/edit', 'SiswaController@edit');
    Route::delete('/siswa/{siswaModel}', 'SiswaController@destroy');
    Route::patch('/siswa/{siswaModel}', 'SiswaController@update');

    Route::get('/matpel', 'MatpelController@index');
    Route::get('/matpel/create', 'MatpelController@create');
    Route::post('/matpel', 'MatpelController@store');
    Route::get('/matpel/{matpelModel}/edit', 'MatpelController@edit');
    Route::delete('/matpel/{matpelModel}', 'MatpelController@destroy');
    Route::patch('/matpel/{matpelModel}', 'MatpelController@update');
});

Route::middleware(['auth', 'checkRole:Guru'])->group(function () {
    Route::get('/kd', 'KdController@index');
    Route::get('/kd/create', 'KdController@create');
    Route::post('/kd', 'KdController@store');
    Route::get('/kd/{kdModel}/edit', 'KdController@edit');
    Route::delete('/kd/{kdModel}', 'KdController@destroy');
    Route::patch('/kd/{kdModel}', 'KdController@update');
    Route::get('/kd/cetakpdf', 'KdController@cetak_pdf');
    
    Route::get('/rpp', 'RppController@index');
    Route::get('/rpp/create', 'RppController@create');
    Route::post('/rpp', 'RppController@store');
    Route::get('/rpp/{rppModel}/edit', 'RppController@edit');
    Route::delete('/rpp/{rppModel}', 'RppController@destroy');
    Route::patch('/rpp/{rppModel}', 'RppController@update');
    Route::get('/rpp/cetakpdf', 'RppController@cetak_pdf');

});

Route::middleware(['auth', 'checkRole:Guru'])->group(function () {
    Route::get('/nilai', 'NilaiController@index');
    Route::get('/nilai/create', 'NilaiController@create');
    Route::post('/nilai', 'NilaiController@store');
    Route::get('/nilai/{nilaiModel}/edit', 'NilaiController@edit');
    Route::delete('/nilai/{nilaiModel}', 'NilaiController@destroy');
    Route::patch('/nilai/{nilaiModel}', 'NilaiController@update');

    Route::get('/kkm', 'KkmController@index');
    Route::get('/kkm/create', 'KkmController@create');
    Route::post('/kkm', 'KkmController@store');
    Route::get('/kkm/{kkmModel}/edit', 'KkmController@edit');
    Route::delete('/kkm/{kkmModel}', 'KkmController@destroy');
    Route::patch('/kkm/{kkmModel}', 'KkmController@update');
    Route::get('/kkm/cetakpdf', 'KkmController@cetak_pdf');
});



