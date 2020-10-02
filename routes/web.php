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

use App\ModelSiswa;

Route::get('/', function () {
    return view('auth/login');
});


Route::group(['as' => 'register'], function () {
    Route::get('/register', 'Auth\RegisterController@index');
    Route::post('/register', 'Auth\RegisterController@register');
});

Route::group(['as' => 'login'], function () {
    Route::get('/login', 'Auth\LoginController@index')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/logout', 'Auth\LoginController@logout');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['as' => 'admin.index', 'middleware' => 'auth'], function () {
    Route::get('admin/index', 'AdminController@index');
});

// User Management
Route::get('admin/usermanagement/form', 'Master\PetugasController@index');
Route::resource('admin/usermanagement/user/tambah', 'Master\PetugasController@create');
Route::post('admin/usermanagement/user/store', 'Master\PetugasController@store');
Route::get('/admin/usermanagement/user', 'Master\PetugasController@user');
Route::get('admin/usermanagement/user/hapus/{id}', 'Master\PetugasController@destroy');
Route::get('/admin/usermanagement/edit/edituser/{id}', 'Master\PetugasController@edit');
Route::post('/admin/usermanagement/user/update/{id}', 'Master\PetugasController@update');

// Tahun Ajaran
Route::get('admin/tahunajaran/form', 'Master\TAController@index');
Route::resource('admin/tahunajaran/tahunajaran/tambah', 'Master\TAController@create');
Route::post('admin/tahunajaran/tahunajaran/store', 'Master\TAController@store');
Route::get('/admin/tahunajaran/tahunajaran', 'Master\TAController@tahun');
Route::get('admin/tahunajaran/tahunajaran/hapus/{id}', 'Master\TAController@destroy');
Route::get('/admin/tahunajaran/edit/edittahun/{id}', 'Master\TAController@edit');
Route::post('/admin/tahunajaran/tahunajaran/update/{id}', 'Master\TAController@update');

// Kelas
Route::get('admin/kelas/form', 'Master\KelasController@index');
Route::resource('admin/kelas/form/kelas/tambah', 'Master\KelasController@create');
Route::post('admin/kelas/kelas/store', 'Master\KelasController@store');
Route::get('/admin/kelas/kelas', 'Master\KelasController@kelas');
Route::get('admin/kelas/kelas/hapus/{id}', 'Master\KelasController@destroy');
Route::get('/admin/kelas/edit/editkelas/{id}', 'Master\KelasController@edit');
Route::post('/admin/kelas/kelas/update/{id}', 'Master\KelasController@update');

// SPP
Route::get('admin/spp/form', 'Master\SPPController@index');
Route::resource('admin/spp/spp/tambah', 'Master\SPPController@create');
Route::post('admin/spp/spp/store', 'Master\SPPController@store');
Route::get('/admin/spp/spp', 'Master\SPPController@spp');
Route::get('admin/spp/spp/hapus/{id}', 'Master\SPPController@destroy');
Route::get('/admin/spp/edit/editspp/{id}', 'Master\SPPController@edit');
Route::post('/admin/spp/spp/update/{id}', 'Master\SPPController@update');

// Siswa
Route::get('admin/siswa/form', 'Master\SiswaController@index');
Route::resource('admin/siswa/siswa/tambah', 'Master\SiswaController@create');
Route::post('admin/siswa/siswa/store', 'Master\SiswaController@store');
Route::get('/admin/siswa/siswa', 'Master\SiswaController@siswa');
Route::get('admin/siswa/siswa/hapus/{id}', 'Master\SiswaController@destroy');
Route::get('/admin/siswa/edit/editsiswa/{id}', 'Master\SiswaController@edit');
Route::post('/admin/siswa/siswa/update/{id}', 'Master\SiswaController@update');
Route::get('/admin/siswa/siswa/cari', 'Master\SiswaController@cari');

// Pembayaran
Route::get('admin/pembayaran/form', 'Master\PembayaranSPPController@index');
Route::resource('admin/pembayaran/pembayaran/tambah', 'Master\PembayaranSPPController@create');
Route::post('admin/pembayaran/pembayaran/store', 'Master\PembayaranSPPController@store');
Route::get('/admin/pembayaran/pembayaran', 'Master\PembayaranSPPController@pembayaran');
Route::get('admin/pembayaran/pembayaran/hapus/{id}', 'Master\PembayaranSPPController@destroy');
Route::get('/admin/pembayaran/edit/editpembayaran/{id}', 'Master\PembayaranSPPController@edit');
Route::post('/admin/pembayaran/pembayaran/update/{id}', 'Master\PembayaranSPPController@update');
Route::get('/admin/pembayaran/pembayaran/cari', 'Master\PembayaranSPPController@cari');
