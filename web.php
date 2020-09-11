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

Route::get('/', function () {
    return 'Selamat Datang';
});
Route::get('/about', function () {
	return 'Nama : Gantangsanra Pradipta Putra K.<br>NIM  : 1931710040';
});
Route::get('/articles/{id}', function($id){
		return 'Halaman artikel ini dengan id ' . $id;
} );
