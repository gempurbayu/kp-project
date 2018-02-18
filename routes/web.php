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

Route::get('/', 'DaftarController@Index');

Route::get('/kost/{slug}/', 'DaftarController@show')->where('slug', '[A-Za-z0-9-_]+');

Route::get('/lihat', 'DaftarController@Lihat');

Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/kost/create', 'KostController@create');
Route::post('/admin/kost/create', 'KostController@store');
Route::get('/admin/kost', 'KostController@index');
Route::get('/landing', 'HomeController@index')->name('home');
Route::resource('kost', 'KostController');

Route::get('/admin', 'KostController@index')->name('home');
