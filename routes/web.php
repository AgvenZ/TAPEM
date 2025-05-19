<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SlideshowController;

Auth::routes();

Route::get('/', function () {
    $latestNews = \App\Models\News::where('is_published', true)
        ->latest()
        ->take(3)
        ->get();
    return view('welcome', compact('latestNews'));
});

// Admin routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('admins', AdminController::class);
    Route::resource('users', UserController::class);

    // Pages management
    Route::resource('pages', PageController::class)->parameters(['pages' => 'page:slug']);
    Route::post('pages/{page}/move', [PageController::class, 'move'])->name('pages.move');

    // News management
    Route::resource('news', NewsController::class)->parameters(['news' => 'news:slug']);

    // Slideshow management
    Route::resource('slideshows', SlideshowController::class);

    // Media Library
    Route::get('/media', [MediaController::class, 'index'])->name('media.index');
    Route::get('/media/create', [MediaController::class, 'create'])->name('media.create');
    Route::post('/media', [MediaController::class, 'store'])->name('media.store');
    Route::delete('/media/{media}', [MediaController::class, 'destroy'])->name('media.destroy');
    Route::get('/media/select', [MediaController::class, 'select'])->name('media.select');

    // Settings
    Route::get('/settings', [\App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings.index');
    Route::put('/settings', [\App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('settings.update');
});

Route::get('/struktur-organisasi', function () {
    return view('struktur-organisasi');
});

Route::get('/sdm', function () {
    return view('sdm');
});

Route::get('/visi-dan-misi', function () {
    return view('visi-dan-misi');
});

Route::get('/tugas-dan-fungsi', function () {
    return view('tugas-dan-fungsi');
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

Route::get('/berita', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{news}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');

// Public pages routes
Route::get('/pages', [\App\Http\Controllers\PageController::class, 'index'])->name('pages.index');
Route::get('/{page:slug}', [\App\Http\Controllers\PageController::class, 'show'])
    ->name('pages.show')
    ->where('page', '^(?!admin|berita|galeri|e-magang|kontak|regulasi|tentang|home).*$');

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/e-magang', function () {
    return view('e-magang');
});

Route::get('/daftar-kecamatan-dan-kelurahan', function () {
    return view('daftar-kecamatan-dan-kelurahan');
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
