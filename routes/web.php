<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('logout', function (){
Auth::logout();
return redirect('/');

});

Route::get('/kosts', 'DaftarController@Index');
Route::get('/kosts/cari/', 'DaftarController@Cari')->name('daftar.cari');
Route::get('/kosts/cari2/', 'HomeController@Cari')->name('home.cari');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/kost/{slug}/', 'DaftarController@show')->where('slug', '[A-Za-z0-9-_]+');

Route::get('/lihat', 'DaftarController@Lihat');

Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');

Auth::routes();

Route::get('/admin/kost/create', 'KostController@create');
Route::post('/admin/kost/create', 'KostController@store');
Route::get('/admin/kost', 'KostController@index');
Route::resource('kost', 'KostController');

Route::get('/admin', 'KostController@index')->name('home');
