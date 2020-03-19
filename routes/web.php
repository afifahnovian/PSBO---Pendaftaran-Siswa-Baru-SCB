<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
>> Web routes buat pindah2 page
*/

// ke landing page

Route::get('/', function () {
    return view('dashboard');
});
 

/*
Catatan : 
POST : buat save ke db
GET : buat nampilin/ ambil data
*/
//untuk input data umum siswa
Route::get('/form','DataSiswaUmumController@create');

// view hasil form
Route::get('/table','DataSiswaUmumController@view');

//delete data tabel data umum siswa
Route::get('/form/delete/{id}','DataSiswaUmumController@deleteData');//utk mendelete data per id

//edit data tabel data umum siswa
Route::post('/form/edit/{id}','DataSiswaUmumController@edit');//utk edit data per id

//update data tabel data umum siswa
Route::get('/form/update/{id}','DataSiswaUmumController@update'); //update data

//input data di form yang disimpan ke database 
Route::post('/form','DataSiswaUmumController@storeData');
/*


Kalau viewnya dalam folder
Route::get('/', function () { //pergi ke page,pake slash  
    return view(view'folderview.welcome'); //untuk return page, page itu ada di .blade.php
});
*/

