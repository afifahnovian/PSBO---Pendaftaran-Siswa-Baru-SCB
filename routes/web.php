<?php
//delete data tabel data umum siswa
//Route::get('/form/delete/{id}','DataSiswaUmumController@deleteData');//utk mendelete data per id

//edit data tabel data umum siswa
//Route::post('/form/edit/{id}','DataSiswaUmumController@edit');//utk edit data per id

//update data tabel data umum siswa
//Route::get('/form/update/{id}','DataSiswaUmumController@update'); //update data


Route::get('/', function () {
    return view('landing-page');
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

Route::get('/kontakppdb', function () {
    return view('kontakppdb');
});
// view table save data
// Route::get('/table','FormControllerSMP@viewData');

Route::get('/kategorisiswasmp/{tipesiswa1}','FormControllerSMP@storeTipeSiswaSMP');
Route::get('/kategorisiswatahfidz/{tipesiswa2}','FormControllerTahfidz@storeTipeSiswaTahfidz');

Route::get('/formpendaftaran_smp', 'FormControllerSMP@createForm');
Route::post('/formpendaftaran_smp/post','FormControllerSMP@storeData');

Route::get('/formpendaftaran_tahfidz', 'FormControllerTahfidz@createForm');
Route::post('/formpendaftaran_tahfidz/post','FormControllerTahfidz@storeData');


//PAGE ADMIN
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Auth::routes();

Route::get('/pages/dashboard', 'HomeController@index')->name('admin');
// Route::get('/dashboard', 'HomeController@index')->name('admin');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
    Route::get('/pages/individu/{id}', 'PageController@Showindividu');
    Route::get('/pages/individu/{id}/edit', 'PageController@Editindividu');
    Route::post('/pages/individu/{id}/update', 'PageController@Updateindividu');
    Route::get('pages/export', 'CalonSiswaController@export');
});