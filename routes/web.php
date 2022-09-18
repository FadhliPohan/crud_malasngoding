<?php

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/register', function () {
    return view('login/register');
});

// Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');

Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/edit-{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::post('/pegawai/update', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/delete-{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');


// jabatan
// Route::get('/jabatan', '\App\Http\Controllers\JabatanController@index');


// Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');
// Route::get('/jabatan/create', [JabatanController::class, 'create'])->name('jabatan.create');
// Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');
// Route::get('/jabatan/edit-{id}', [JabatanController::class, 'edit'])->name('jabatan.edit');
// Route::post('/jabatan/update', [JabatanController::class, 'update'])->name('jabatan.update');
// Route::get('/jabatan/delete-{id}', [JabatanController::class, 'delete'])->name('jabatan.delete');


Route::prefix('jabatan')->group(function(){
    Route::get('/', [JabatanController::class, 'index'])->name('jabatan.index');
    Route::get('/create', [JabatanController::class, 'create'])->name('jabatan.create');
    Route::post('/store', [JabatanController::class, 'store'])->name('jabatan.store');
    Route::get('/edit-{id}', [JabatanController::class, 'edit'])->name('jabatan.edit');
    Route::post('/update', [JabatanController::class, 'update'])->name('jabatan.update');
    Route::get('/delete-{id}', [JabatanController::class, 'delete'])->name('jabatan.delete');
    
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
