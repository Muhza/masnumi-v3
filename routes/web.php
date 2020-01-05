<?php

// Route::get('/', function(){
// 	return view('welcome');
// });

// Route untuk user 
Route::get('/', 'MasnumiController@indexuser');
Route::get('/', 'MasnumiController@showprodukuser');
Route::get('/cariproduk', 'MasnumiController@cariproduk');


// // contoh profile 
Route::get('/Admin', 'UserController@profile')->middleware('auth');

// masnumi
Route::get('/index', 'MasnumiController@index')->middleware('auth');

// masnumi produk
Route::get('/barang', 'MasnumiController@showbarang')->middleware('auth');
Route::get('/barang/create', 'MasnumiController@create')->middleware('auth');
Route::post('/barang', 'MasnumiController@store')->middleware('auth');
Route::put('/barang/update/{id}','MasnumiController@update')->middleware('auth'); 
Route::get('/barang/hapus/{id}','MasnumiController@hapus')->middleware('auth');
Route::get('/barang/cari','MasnumiController@cari')->middleware('auth');
Route::get('barang/edit/{id}','MasnumiController@edit')->middleware('auth');

 
// // data user
Route::get('/user', 'MasnumiController@showuser')->middleware('auth');
Route::get('/user/create', 'MasnumiController@createuser')->middleware('auth');
// Route::post('/user', 'MasnumiController@storeeuser');
// Route::get('/user/edit/{id}', 'MasnumiController@edituser');

// // data Wilayah
Route::get('/wilayah', 'MasnumiController@showwilayah')->middleware('auth');
Route::get('/wilayah/create', 'MasnumiController@createwilayah')->middleware('auth');
Route::post('/wilayah', 'MasnumiController@storewilayah')->middleware('auth');
Route::get('/wilayah/edit/{id}', 'MasnumiController@editwilayah')->middleware('auth');
Route::put('/wilayah/update/{id}','MasnumiController@updatewilayah')->middleware('auth');
Route::get('/wilayah/hapus/{id}', 'MasnumiController@hapuswilayah')->middleware('auth');

// // contact us
Route::get('/contact', 'MasnumiController@showcontact')->middleware('auth');
;
// Route::get('/contact/create', 'MasnumiController@createcontact');
// Route::post('/contact', 'MasnumiController@storecontact');
Route::get('/contact/edit/{id}', 'MasnumiController@editcontact')->middleware('auth');
Route::put('/contact/update/{id}', 'MasnumiController@updatecontact')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
