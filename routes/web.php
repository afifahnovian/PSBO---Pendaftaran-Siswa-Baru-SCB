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

Route::get('/', function () {
    return view('dashboard');
});

//simpen berkas daftar yang bentuknya image
// Route::get('/formDaftar', 'BerkasDaftarController@create'); formdaftar nanti diganti karna skrg belum ada frontend page sbg tempat untuk upload gambar
// Route::post('/confirmation', 'BerkasDaftarController@store'); misalnya abis dari situ semua data pendaftaran disimpen di confirmation page
 
/*
Kalau viewnya dalam folder
Route::get('/', function () { //pergi ke page,pake slash  
    return view(view'folderview.welcome'); //untuk return page, page itu ada di .blade.php
});
*/

