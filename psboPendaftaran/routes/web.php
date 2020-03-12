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

Route::get('/', function () { //pergi ke page,pake slash  
    return view('welcome'); //untuk return page, page itu ada di .blade.php
});
 
/*
Kalau viewnya dalam folder
Route::get('/', function () { //pergi ke page,pake slash  
    return view(view'folderview.welcome'); //untuk return page, page itu ada di .blade.php
});
*/

