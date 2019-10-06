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
    return view('welcome');
});

Auth::routes();

Route::get('createcaptcha', 'CaptchaController@create');
Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'CaptchaController@refreshCaptcha');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kategori_artikel','KategoriArtikelController@index')->name('kategori_artikel.index');
route::get('/kategori_artikel/create'.'KategoriArtikelController@create')->name('kategori_artikel.create');
route::post('/kategori_artikel'.'KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel','KategoriArtikelController@show')->name('kategori_artikel.show');


Route::get('/kategori_berita','KategoriBeritaController@index')->name('kategori_berita.index');
route::get('/kategori_berita/create'.'KategoriBeritaController@create')->name('kategori_berita.create');
route::post('/kategori_berita'.'KategoriBeritaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita','KategoriBeritaController@show')->name('kategori_berita.show');


Route::get('/kategori_galeri','KategoriGaleriController@index')->name('kategori_galeri.index');
route::get('/kategori_galeri/create'.'KategoriGaleriController@create')->name('kategori_galeri.create');
route::post('/kategori_galeri'.'KategoriGaleriController@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri','KategoriGaleriController@show')->name('kategori_galeri.show');


Route::get('/kategori_pengumuman','KategoriPengumumanController@index')->name('kategori_pengumuman.index');
route::get('/kategori_pengumuman/create'.'KategoriPengumumanController@create')->name('kategori_pengumuman.create');
route::post('/kategori_Pengumuman'.'KategoriPengumumanController@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman','KategoriPengumumanController@show')->name('kategori_pengumuman.show');

Route::get('/artikel','ArtikelController@index')->name('artikel.index');
route::get('/artikel/create'.'ArtikelController@create')->name('artikel.create');
route::post('/artikel'.'ArtikelController@store')->name('artikel.store');
Route::get('/artikel','ArtikelController@show')->name('artikel.show');

Route::get('/berita','BeritaController@index')->name('berita.index');
route::get('/berita/create'.'BeritaController@create')->name('berita.create');
route::post('/berita'.'BeritaController@store')->name('berita.store');
Route::get('/Berita','BeritaController@show')->name('berita.show');

Route::get('/galeri','GaleriController@index')->name('galeri.index');
route::get('/galeri/create'.'GaleriController@create')->name('galeri.create');
route::post('/galeri'.'GaleriController@store')->name('galeri.store');
Route::get('/galeri','GaleriController@show')->name('galeri.show');


Route::get('/pengumuman','PengumumanController@index')->name('pengumuman.index');
route::get('/pengumuman/create'.'PengumumanController@create')->name('pengumuman.create');
route::post('/pengumuman'.'PengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman{id}','PengumumanController@show')->name('pengumuman.show');





