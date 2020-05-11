<?php
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

Route::get('/kategorisiswa', function () {
    return view('kategorisiswa');
});

Route::get('/formpendaftaran_smp', function () {
    return view('formpendaftaran_smp');
});
Route::get('/formpendaftaran_tahfidz', function () {
    return view('formpendaftaran_tahfidz');
});

//simpen berkas daftar yang bentuknya image
// Route::get('/formDaftar', 'BerkasDaftarController@create'); formdaftar nanti diganti karna skrg belum ada frontend page sbg tempat untuk upload gambar
// Route::post('/confirmation', 'BerkasDaftarController@store'); misalnya abis dari situ semua data pendaftaran disimpen di confirmation page

/*
Catatan : 
POST : buat save ke db
GET : buat nampilin/ ambil data
*/


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



/*Kalau viewnya dalam folder
Route::get('/', function () { //pergi ke page,pake slash  
    return view(view'folderview.welcome'); //untuk return page, page itu ada di .blade.php
});
*/

