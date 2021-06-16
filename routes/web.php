<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/tempatwisata', 'IndexController@tempatwisata');
Route::get('/tempatwisata/cari', 'IndexController@tempatwisatasearch');
Route::get('/tempatwisata/{id}','IndexController@tempatwisatareadmore');

Route::get('/wisatawan', 'IndexController@wisatawan');
Route::post('/wisatawan/store', 'IndexController@wisatawanstore');


Route::get('/tentang', function () {
    return view('tentangkami');
});

//Route Login
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
//Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('admin', 'AdminController@index')->name('admin');

        //Route Data Tempat Wisata Di Admin
        Route::get('/admin/tempatwisata', 'TempatWisataController@index');
        Route::get('/admin/tempatwisata/tambah', 'TempatWisataController@tambah');
        Route::post('/admin/tempatwisata/store', 'TempatWisataController@store');
        Route::get('/admin/tempatwisata/edit/{id}', 'TempatWisataController@edit');
        Route::post('/admin/tempatwisata/update/{id}', 'TempatWisataController@update');
        Route::get('/admin/tempatwisata/hapus/{id}', 'TempatWisataController@destroy');
        Route::get('/admin/tempatwisata/cari', 'TempatWisataController@search');

        //Route Data Admin
       Route::get('/admin/dataadmin', 'AuthController@dataadmin');
       Route::get('/admin/dataadmin/hapus/{id}', 'AuthController@dataadminhapus');
       Route::get('/admin/dataadmincari', 'AuthController@dataadmincari');

        //Route Daftar Admin
        Route::get('/admin/dataadmin/register', 'AuthController@showFormRegister')->name('register');
        Route::post('/admin/dataadmin/register', 'AuthController@register');

    Route::get('logout', 'AuthController@logout')->name('logout');
});
