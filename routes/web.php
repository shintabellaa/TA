<?php

use App\Http\Controllers\FunctionalDetailsController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home.index')->middleware('auth');
    Route::get('/dashboard', 'HomeController@index')->name('home.index')->middleware('auth');


    Route::group(['middleware' => ['role:1']], function () {
        Route::get('/profil', 'Profilcontroller@profil')->name('profil');
        Route::resource('pangkatgolongan', 'RankGroupController');
        Route::resource('biodatapegawai', 'BiodataPribadiController');
        Route::resource('fungsional', 'FunctionalController');
        Route::resource('struktural', 'StructuralController');
        Route::resource('education','EducationController');
        Route::resource('unitkerja', 'WorkUnitController');
        Route::resource('biodatakeluarga', 'FamilyController');
        Route::resource('training', 'TrainingController');
        Route::resource('mutasi','EmployeeTransferController');
        Route::resource('datadiri', 'DataDiriController');
        Route::resource( 'fungsionaldetail','FunctionalDetailsController');
        Route::resource( 'strukturaldetail','StructuralDetailsController');
        Route::resource( 'educationdetail','EducationDetailsController');
    });




    Route::group(['middleware' => ['role:2']], function () {
        Route::get('/profil', 'Profilcontroller@profil')->name('profil');
        Route::resource( 'profildiri','ProfilDiriUserController');
        Route::resource( 'strukturaluser','StructuralUserController');
        Route::resource( 'fungsionaluser','FunctionalUserController');
        Route::resource( 'unitkerjauser','WorkUnitUserController');
        Route::resource( 'educationuser','EducationUserController');
        Route::resource( 'traininguser', 'TrainingUserController');
        Route::resource( 'pangkatgolonganuser', 'RankGroupUserController');
        Route::resource( 'biodatakeluargauser','FamilyUserController');
        Route::resource( 'mutasiuser', 'EmployeeTransferUserController');
    });


});


















//biodata pegawai

// Route::get('/biodatapribadi', 'BiodatapribadiController@index')->name('biodata.pribadi');
// Route::get('/biodatapribadi/get_kecamatan', 'BiodatapribadiController@get_kecamatan')->name('biodata.get_kecamatan');
// Route::post('/biodatapribadi/simpan', 'BiodatapribadiController@store')->name('biodata.store');
// Route::get('/listbiodatapegawai', 'BiodatapribadiController@indexlist')->name('list.biodata');
// Route::get('/listbiodatapegawai/{id}/edit', 'BiodatapribadiController@edit')->name('edit.biodata');
// Route::delete('/listbiodatapegawai/destroy/{id}', 'BiodatapribadiController@destroy')->name('delete.biodata');



// Route::get('/struktural', 'StructuralController@index')->name('struktural.index');
// Route::get('/struktural/tambah', 'StructuralController@create')->name('struktural.create');
// Route::post('/struktural/tambah', 'StructuralController@store')->name('struktural.store');



// Route::get('/biodatakeluarga', 'FamilyController@index')->name('biodatakeluarga._form');



//Fungsional

// Route::get('/fungsional', 'FunctionalController@index')->name('fungsional.index');
// Route::get('/fungsional/tambah', 'FunctionalController@create')->name('fungsional.create');
// Route::post('/fungsional/tambah', 'FunctionalController@store')->name('fungsional.store');


//Pangkat golongan

// Route:: get('/pangkatgolongan', 'RankGroupController@index')->name('pangkatgolongan.index');















