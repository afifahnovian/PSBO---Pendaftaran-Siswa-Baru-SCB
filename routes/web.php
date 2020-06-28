<?php
use App\DataPost;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\faqSCB;

Route::get('/', function () {
    $data_posts = DataPost::first();
    $faq = faqSCB::all();
    return view('landing-page',compact('data_posts','faq'));
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

    Route::get('/pages/post/Konten', 'PageController@AllPost')->name('all_post');
    Route::post('/pages/update-headline', 'DataPostController@UpdateHeadline');
    Route::post('/pages/update-timeline', 'DataPostController@UpdateTimeline');
    
    // FAQ
    Route::get('/pages/post/FAQ', 'PageController@viewFAQ')->name('all_faq');
    Route::get('/pages/post/FAQ/create', 'PageController@viewCreateFAQ')->name('admin-view-create-faq');
    Route::get('/pages/post/FAQ/edit/{id}', 'PageController@viewEditFAQ')->name('admin-view-edit-faq');

    Route::post('/pages/post/FAQ/create', 'FAQController@CreateFAQ')->name('create-faq');
    Route::post('/pages/post/FAQ/edit', 'FAQController@EditFAQ')->name('edit-faq');
    Route::get('/pages/post/FAQ/delete/{id}', 'FAQController@DeleteFAQ')->name('delete-faq');
    // SyaratPendaftaran SMP
    Route::get('/pages/post/SyaratSMP', 'PageController@viewSyaratSMP')->name('all_syarat_smp');
    Route::get('/pages/post/SyaratSMP/create', 'PageController@viewCreateSyaratSMP')->name('admin-view-create-syarat-smp');
    Route::get('/pages/post/SyaratSMP/edit/{id}', 'PageController@viewEditSyaratSMP')->name('admin-view-edit-syarat-smp');

    Route::post('/pages/post/SyaratSMP/create', 'FAQController@CreateFAQ')->name('create-faq');
    Route::post('/pages/post/SyaratSMP/edit', 'FAQController@EditFAQ')->name('edit-faq');

    //SyaratPendaftaran Tahfidz
    
    Route::get('/tables/pages/export/SMP', 'CalonSiswaController@exportSMP');
    Route::get('/tables/pages/export/Tahfidz', 'CalonSiswaController@exportTahfidz');
    Route::get('/tables/SMP', 'PageController@tablesSMP');
    Route::get('/tables/Tahfidz', 'PageController@tablesTahfidz');
    Route::get('/table', 'PageController@table');
    Route::get('/KK', 'PageController@berkas');
});
