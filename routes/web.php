<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MediaController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// Admin routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('admins', AdminController::class);
    
    // Pages management
    Route::resource('pages', PageController::class);
    
    // News management
    Route::resource('news', NewsController::class)->parameters(['news' => 'news:slug']);
    
    // Media Library
    Route::get('/media', [MediaController::class, 'index'])->name('media.index');
    Route::get('/media/create', [MediaController::class, 'create'])->name('media.create');
    Route::post('/media', [MediaController::class, 'store'])->name('media.store');
    Route::delete('/media/{media}', [MediaController::class, 'destroy'])->name('media.destroy');
    Route::get('/media/select', [MediaController::class, 'select'])->name('media.select');
});

Route::get('/strukturorganisasi', function () {
    return view('strukturorganisasi');
});

Route::get('/sdm', function () {
    return view('sdm');
});

Route::get('/visi-misi', function () {
    return view('visi-misi');
});

Route::get('/tugas-fungsi', function () {
    return view('tugas-fungsi');
});

Route::get('/pembinaan-administrasi-kecamatan-dan-kelurahan', function () {
    return view('pembinaan-administrasi-kecamatan-dan-kelurahan');
});

Route::get('/evaluasi-kinerja-kecamatan-dan-kelurahan', function () {
    return view('evaluasi-kinerja-kecamatan-dan-kelurahan');
});

Route::get('/fasilitasi-pengumuman-relaas', function () {
    return view('fasilitasi-pengumuman-relaas');
});

Route::get('/pelayanan-terpadu-akhir-pekan-dan-malam-hari', function () {
    return view('pelayanan-terpadu-akhir-pekan-dan-malam-hari');
});

Route::get('/penamaan-dan-pendataan-rupa-bumi', function () {
    return view('penamaan-dan-pendataan-rupa-bumi');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/e-magang', function () {
    return view('e-magang');
});

Route::get('/daftar-kecamatan-kelurahan', function () {
    return view('daftar-kecamatan-kelurahan');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/regulasi', function () {
    return view('regulasi');
});

Route::get('/berita1', function () {
    return view('berita1');
});

Route::get('/berita2', function () {
    return view('berita2');
});

Route::get('/berita3', function () {
    return view('berita3');
});

Route::get('/berita4', function () {
    return view('berita4');
});

Route::get('/berita5', function () {
    return view('berita5');
});

Route::get('/berita6', function () {
    return view('berita6');
});

Route::get('/berita7', function () {
    return view('berita7');
});

Route::get('/berita8', function () {
    return view('berita8');
});

Route::get('/berita9', function () {
    return view('berita9');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
