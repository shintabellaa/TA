<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home.index')->middleware('auth');
Route::get('/', 'HomeController@index')->name('home.index')->middleware('auth');

Route::get('/profil', 'Profilcontroller@profil')->name('profil');
Route::get('/biodatapribadi', 'BiodatapribadiController@index')->name('biodata.pribadi');
Route::get('/biodatapribadi/get_kecamatan', 'BiodatapribadiController@get_kecamatan')->name('biodata.get_kecamatan');

Route::post('/biodatapribadi/simpan', 'BiodatapribadiController@store')->name('biodata.store');

Route::get('/listbiodatapegawai', 'BiodatapribadiController@indexlist')->name('list.biodata');

Route::get('/listbiodatapegawai/{id}/edit', 'BiodatapribadiController@edit')->name('edit.biodata');


// Route::delete('/listbiodatapegawai/destroy/{id}', 'BiodatapribadiController@destroy')->name('delete.biodata');

//unit kerja
Route::resource('unitkerja', 'WorkUnitController');


Route::get('/biodatakeluarga', 'FamilyController@index')->name('biodatakeluarga.index');


Route::get('/struktural', 'StructuralController@index')->name('struktural.index');


Route::get('/fungsional', 'FunctionalController@index')->name('fungsional.index');

Route:: get('/pangkatgolongan', 'RankGroupController@index')->name('pangkatgolongan.index');


// Route::resource('struktural', 'StructuralController');



// Route::resource('fungsional', 'FunctionalController');








