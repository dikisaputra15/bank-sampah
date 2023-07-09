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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('/admin/adduser', [App\Http\Controllers\UserController::class, 'adduser']);
    Route::post('/admin/storeuser', [App\Http\Controllers\UserController::class, 'storeuser']);
    Route::get('/admin/deluser/{id}', [App\Http\Controllers\UserController::class, 'destroyusr']);
    Route::get('/admin/{id}/edituser', [App\Http\Controllers\UserController::class, 'edituser']);
    Route::put('/admin/edituser/{id}', [App\Http\Controllers\UserController::class, 'updateuser']);
    Route::get('/admin/{id}/changeuserpass', [App\Http\Controllers\UserController::class, 'changeuserpass']);
    Route::post('/admin/updatepass', [App\Http\Controllers\UserController::class, 'updatepass']);
    Route::get('/admin/profile', [App\Http\Controllers\UserController::class, 'profile']);
    Route::post('/admin/saveprofile', [App\Http\Controllers\UserController::class, 'saveprofile']);
    Route::get('/admin/nasabah', [App\Http\Controllers\NasabahController::class, 'index']);
    Route::get('/admin/addnasabah', [App\Http\Controllers\NasabahController::class, 'addnasabah']);
    Route::post('/admin/storenasabah', [App\Http\Controllers\NasabahController::class, 'storenasabah']);
    Route::get('/admin/delnasabah/{id}', [App\Http\Controllers\NasabahController::class, 'destroynasabah']);
    Route::get('/admin/{id}/editnasabah', [App\Http\Controllers\NasabahController::class, 'editnasabah']);
    Route::put('/admin/updatenasabah/{id}', [App\Http\Controllers\NasabahController::class, 'updatenasabah']);
    Route::get('/admin/petugas', [App\Http\Controllers\PetugasController::class, 'index']);
    Route::get('/admin/addpetugas', [App\Http\Controllers\PetugasController::class, 'addpetugas']);
    Route::post('/admin/storepetugas', [App\Http\Controllers\PetugasController::class, 'storepetugas']);
    Route::get('/admin/delpetugas/{id}', [App\Http\Controllers\PetugasController::class, 'destroypetugas']);
    Route::get('/admin/{id}/editpetugas', [App\Http\Controllers\PetugasController::class, 'editpetugas']);
    Route::put('/admin/updatepetugas/{id}', [App\Http\Controllers\PetugasController::class, 'updatepetugas']);
    Route::get('/admin/setoran', [App\Http\Controllers\TransaksiController::class, 'setoran']);
    Route::get('/admin/penarikan', [App\Http\Controllers\TransaksiController::class, 'penarikan']);
    Route::get('/admin/lokasi', [App\Http\Controllers\LokasiController::class, 'index']);
    Route::get('/admin/addlokasi', [App\Http\Controllers\LokasiController::class, 'addlokasi']);
    Route::post('/admin/storelokasi', [App\Http\Controllers\LokasiController::class, 'storelokasi']);
    Route::get('/admin/dellokasi/{id}', [App\Http\Controllers\LokasiController::class, 'destroylokasi']);
    Route::get('/admin/{id}/editlokasi', [App\Http\Controllers\LokasiController::class, 'editlokasi']);
    Route::post('/admin/updatelokasi', [App\Http\Controllers\LokasiController::class, 'updatelokasi']);
    Route::get('/admin/kategori', [App\Http\Controllers\KategoriController::class, 'index']);
    Route::get('/admin/addkategori', [App\Http\Controllers\KategoriController::class, 'addkategori']);
    Route::post('/admin/storekategori', [App\Http\Controllers\KategoriController::class, 'storekategori']);
    Route::get('/admin/delkategori/{id}', [App\Http\Controllers\KategoriController::class, 'destroykategori']);
    Route::get('/admin/{id}/editkategori', [App\Http\Controllers\KategoriController::class, 'editkategori']);
    Route::put('/admin/updatekategori/{id}', [App\Http\Controllers\KategoriController::class, 'updatekategori']);
    Route::get('/admin/{id}/pilihnasabah', [App\Http\Controllers\TransaksiController::class, 'pilihnasabah']);
    Route::post('/admin/stortabungan', [App\Http\Controllers\TransaksiController::class, 'stortabungan']);
    Route::get('/admin/{id}/editsetoran', [App\Http\Controllers\TransaksiController::class, 'editsetoran']);
    Route::post('/admin/updatesetoran', [App\Http\Controllers\TransaksiController::class, 'updatesetoran']);
    Route::get('/admin/{id}/penarikanuang', [App\Http\Controllers\TransaksiController::class, 'penarikanuang']);
    Route::post('/admin/tarikuang', [App\Http\Controllers\TransaksiController::class, 'tarikuang']);
    Route::get('/admin/lihattabungan', [App\Http\Controllers\TransaksiController::class, 'lihattabungan']);
    Route::get('/peta/json', [App\Http\Controllers\DashboardController::class, 'titikbank']);
});

Route::get('/about', [App\Http\Controllers\UserController::class, 'index']);
