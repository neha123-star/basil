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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
Route::get('admin/home','HomeController@adminHome')->name('indexadmin')->middleware('is_admin');



//Yang tampil di bagian User
Route::get('/tampil','tampil@index');
Route::get('/','tampil@index');
Route::get('/tampil/office','tampil@office');
Route::get('/tampil/programming','tampil@programming');
Route::get('/tampil/desain','tampil@desain');
Route::get('/tampil/about','tampil@about');
Route::get('/tampil/contact','tampil@contact');
Route::get('/admin/akses','tampil@aksesadmin')->name('aksesadmin')->middleware('is_admin');

//Tambahan di bagian Admin
//office

Route::get('/tampil/lihatoff','crudController@lihatoff')->name('lihatoffad')->middleware('is_admin');
Route::get('/tampil/tambahoff','crudController@tambahoff')->name('tambahoff')->middleware('is_admin');
Route::post('/tampil/storeoff','crudController@storeoff')->name('storeoff')->middleware('is_admin');
Route::get('/tampil/edit/{id}','crudController@editoff')->name('aditoff')->middleware('is_admin');
Route::put('/tampil/edited/{id}','crudController@edited')->name('edited')->middleware('is_admin');

Route::get('/tampil/hapus/{id}','crudController@delete')->name('hapus')->middleware('is_admin');

//programmer

Route::get('/tampil/lihatpg','crudController@lihatpg')->name('lihatpg')->middleware('is_admin');
Route::get('/tampil/tambahpg','crudController@tambahpg')->name('tambahpg')->middleware('is_admin');
Route::post('/tampil/storepg','crudController@storepg')->name('storepg')->middleware('is_admin');
Route::get('/tampil/editpg/{id}','crudController@editpg')->name('aditpg')->middleware('is_admin');
Route::post('/tampil/editedpg/{id}','crudController@editedpg')->name('editedpg')->middleware('is_admin');
Route::get('/tampil/hapuspg/{id}','crudController@deletepg')->name('hapuspg')->middleware('is_admin');

//desain

Route::get('/tampil/lihatds','crudController@lihatds')->name('lihatds')->middleware('is_admin');
Route::get('/tampil/tambahds','crudController@tambahds')->name('tambahds')->middleware('is_admin');
Route::post('/tampil/storeds','crudController@storeds')->name('store')->middleware('is_admin');
Route::get('/tampil/editds/{id}','crudController@editds')->name('aditds')->middleware('is_admin');
Route::post('/tampil/editedds/{id}','crudController@editedds')->name('editedds')->middleware('is_admin');
Route::get('/tampil/hapusds/{id}','crudController@deletedds')->name('hapusds')->middleware('is_admin');
