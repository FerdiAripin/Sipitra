<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\JadwalKegiatanController;
use App\Http\Controllers\DokumentasiKegiatanController;

Route::get('/', function () {
    return view('welcome');
    // return redirect()->route('welcome');
})->name('welcome');

Route::get('/kader', function () {
    return view('kader');
})->name('kader');

Route::get('/jadwal', function () {
    return view('jadwal');
})->name('jadwal');

Route::get('/posyandu/nangka1', function () {
    return view('posyandu.nangka1');
});


Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])->name('backend.beranda')->middleware('auth');

Route::get('backend/login', [LoginController::class, 'loginBackend'])->name('backend.login');
Route::post('backend/login', [LoginController::class, 'authenticateBackend'])->name('backend.login');
Route::post('backend/logout', [LoginController::class, 'logoutBackend'])->name('backend.logout');






// Route untuk User
// Route::resource('backend/user', UserController::class)->middleware('auth');
Route::resource('backend/user', UserController::class, ['as' => 'backend'])->middleware('auth');





// Route untuk laporan user
Route::get('backend/laporan/formuser', [UserController::class, 'formUser'])->name('backend.laporan.formuser')->middleware('auth');
Route::post('backend/laporan/cetakuser', [UserController::class, 'cetakUser'])->name('backend.laporan.cetakuser')->middleware('auth');
// web.php
Route::get('/kader', [UserController::class, 'showUserList'])->name('kader.index');




Route::get('/jadwal-kegiatan', [JadwalKegiatanController::class, 'showForVisitors'])->name('jadwal.kegiatan.visitor');

Route::prefix(prefix: 'backend')->name('backend.')->middleware(['auth'])->group(function () {
    // Route untuk menampilkan jadwal kegiatan
    Route::get('/jadwal', [JadwalKegiatanController::class, 'index'])->name('jadwal.index');
    // Route untuk menambah jadwal kegiatan
    Route::get('/jadwal/create', [JadwalKegiatanController::class, 'create'])->name('jadwal.create');
    Route::post('/jadwal', [JadwalKegiatanController::class, 'store'])->name('jadwal.store');
    // Route untuk mengedit jadwal kegiatan
    Route::get('/jadwal/{jadwal}/edit', [JadwalKegiatanController::class, 'edit'])->name('jadwal.edit');
    Route::put('/jadwal/{jadwal}', [JadwalKegiatanController::class, 'update'])->name('jadwal.update');
    // Route untuk menghapus jadwal kegiatan
    Route::delete('/jadwal/{jadwal}', [JadwalKegiatanController::class, 'destroy'])->name('jadwal.destroy');

    Route::get('/jadwal-kegiatan', [JadwalKegiatanController::class, 'showForVisitors'])->name('jadwal.kegiatan.visitor');







    Route::resource('dokumentasi', DokumentasiKegiatanController::class)->except(['show', 'edit', 'update']);

    // Route untuk dokumentasi kegiatan
    Route::get('/dokumentasi', [DokumentasiKegiatanController::class, 'index'])->name('dokumentasi.index');
    Route::get('/dokumentasi/create', [DokumentasiKegiatanController::class, 'create'])->name('dokumentasi.create');
    Route::post('/dokumentasi', [DokumentasiKegiatanController::class, 'store'])->name('dokumentasi.store');
    Route::get('/dokumentasi/{dokumentasi}/edit', [DokumentasiKegiatanController::class, 'edit'])->name('dokumentasi.edit');  // Route untuk edit
    Route::put('/dokumentasi/{dokumentasi}', [DokumentasiKegiatanController::class, 'update'])->name('dokumentasi.update'); // Route untuk update
    Route::delete('/dokumentasi/{dokumentasi}', [DokumentasiKegiatanController::class, 'destroy'])->name('dokumentasi.destroy');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/dokumentasi-kegiatan', [DokumentasiKegiatanController::class, 'showForVisitors'])->name('dokumentasi.kegiatan.visitor');
Route::get('/posyandu/{posyanduId}', [PosyanduController::class, 'show'])->name('posyandu.show');

// Route::resource('user', UserController::class);
// Route::resource('user', UserController::class, ['as' => 'backend']);
