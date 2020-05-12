<?php
#use Illuminate\Routing\Route;
/*
Catatan : 
POST : buat save ke db
GET : buat nampilin/ ambil data
*/

Route::get('/', function () {
<<<<<<< HEAD
    return view('home');
=======
    return view('landing-page');
>>>>>>> e530a2fe06647e339d3944d3473d0cee99ddf7c7
});

Route::get('/syarat-smp', function () {
    return view('syarat-smp');
});

Route::get('/syarat-tahfidz', function () {
    return view('syarat-tahfidz');
});

Route::get('/kategorisiswa', function () {
    return view('kategorisiswa');
});

Route::get('/formpendaftaran_smp', function () {
    return view('formpendaftaran_smp');
});
Route::get('/formpendaftaran_tahfidz', function () {
    return view('formpendaftaran_tahfidz');
});

// view table save data
Route::get('/table','FormControllerSMP@view');

//delete data tabel data umum siswa
Route::get('/form/delete/{id}','DataSiswaUmumController@deleteData');//utk mendelete data per id

//edit data tabel data umum siswa
Route::post('/form/edit/{id}','DataSiswaUmumController@edit');//utk edit data per id

//update data tabel data umum siswa
Route::get('/form/update/{id}','DataSiswaUmumController@update'); //update data

//input data di form yang disimpan ke database 
Route::post('/formpendaftaran_smp','FormControllerSMP@storeData');

//input data di form yang disimpan ke database
Route::post('/formpendaftaran_tahfidz','FormControllerTahfidz@storeData');


//PAGE ADMIN
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

<<<<<<< HEAD
//PAGE ADMIN
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

=======
>>>>>>> e530a2fe06647e339d3944d3473d0cee99ddf7c7
Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});