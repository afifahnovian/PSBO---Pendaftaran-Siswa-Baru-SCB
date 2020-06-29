<?php
use App\DataPost;
// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth

Route::get('/', function () {
    $data_posts = DataPost::first();
    return view('landing-page',compact('data_posts'));
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
Route::get('/dashboard', 'HomeController@index')->name('admin');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
    Route::get('/pages/individu/{id}', 'PageController@Showindividu');
    Route::post('/pages/edit/{id}', 'PageController@Editindividu');
    Route::get('/pages/update/{id}', 'PageController@Updateindividu');

    Route::get('/pages/post', 'PageController@AllPost')->name('all_post');
    Route::post('/pages/update-headline', 'DataPostController@UpdateHeadline');
    Route::post('/pages/update-timeline', 'DataPostController@UpdateTimeline');
    
    Route::get('/tables/pages/export/SMP/Perempuan', 'CalonSiswaController@exportSMPPR');
    Route::get('/tables/pages/export/SMP/laki', 'CalonSiswaController@exportSMPLK');
    Route::get('/tables/pages/export/Tahfidz/Perempuan', 'CalonSiswaController@exportTahfidzPR');
    Route::get('/tables/pages/export/Tahfidz/laki', 'CalonSiswaController@exportTahfidzLK');
    
    Route::get('/tables/SMP/{status}', 'PageController@tablesSMP');
    Route::get('/tables/Tahfidz/{status}', 'PageController@tablesTahfidz');
    Route::get('/KK', 'PageController@berkas');
});
