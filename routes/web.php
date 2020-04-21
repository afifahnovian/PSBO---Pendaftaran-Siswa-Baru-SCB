<?php

// ke landing page

#use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/form0', function () {
    return view('form0');
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

