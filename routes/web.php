<?php

// ke landing page

#use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/syarat-smp', function () {
    return view('syarat-smp');
});

Route::get('/syarat-tahfidz', function () {
    return view('syarat-tahfidz');
});

Route::get('/form0', function () {
    return view('form0');
});

Route::get('/formpendaftaran', function () {
    return view('formpendaftaran');
});
//simpen berkas daftar yang bentuknya image
// Route::get('/formDaftar', 'BerkasDaftarController@create'); formdaftar nanti diganti karna skrg belum ada frontend page sbg tempat untuk upload gambar
// Route::post('/confirmation', 'BerkasDaftarController@store'); misalnya abis dari situ semua data pendaftaran disimpen di confirmation page
 

/*
Catatan : 
POST : buat save ke db
GET : buat nampilin/ ambil data
*/


//untuk input data umum siswa
Route::get('/form','DataSiswaUmumController@create');
Route::get('/form1','DataSiswaUmumController@create1');
Route::get('/form2','DataSiswaUmumController@create2');
Route::get('/form3','DataSiswaUmumController@create3');
Route::get('/form4','DataSiswaUmumController@create4');
Route::get('/form5-UploadBerkasSMP','DataSiswaUmumController@create5');

// view next form step 2
Route::get('/table','FormController@create');

//delete data tabel data umum siswa
Route::get('/form/delete/{id}','DataSiswaUmumController@deleteData');//utk mendelete data per id

//edit data tabel data umum siswa
Route::post('/form/edit/{id}','DataSiswaUmumController@edit');//utk edit data per id

//update data tabel data umum siswa
Route::get('/form/update/{id}','DataSiswaUmumController@update'); //update data

//input data di form yang disimpan ke database 
Route::post('/formpendaftaran','FormController@storeData');
/*


Kalau viewnya dalam folder
Route::get('/', function () { //pergi ke page,pake slash  
    return view(view'folderview.welcome'); //untuk return page, page itu ada di .blade.php
});
*/

