<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriKegiatanController;
use App\Http\Controllers\StrukturKepengurusanController;
use App\Http\Controllers\WartaController;
use App\Http\Controllers\JemaatController;
use App\Models\GaleriKegiatan;

Route::get('/', function () {
    return view('home');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/berita/user', [BeritaController::class, 'index2'])->name('berita.user');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('detail');
Route::get('/galeri/user', [GaleriKegiatanController::class, 'index2'])->name('galeri.user');
Route::get('/warta/user', [WartaController::class, 'index2'])->name('warta.user');
Route::get('/pengurus/user', [StrukturKepengurusanController::class, 'index2'])->name('pengurus.user');

Route::get('/warta', function () {
    return view('warta');
});
Route::get('/pengurus', function () {
    return view('pengurus');
});
Route::get('/perkembangan', function () {
    return view('perkembangan');
});
Route::get('/ayat', function () {
    return view('ayat');
});
Route::get('/kegiatan', function () {
    return view('kegiatan');
});


// Authentication
Auth::routes(['register' => false]);

// Group Admin Panel (Harus Login)
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('berita', BeritaController::class);
    // di route: web.php
Route::resource('warta', WartaController::class)->parameters([
    'warta' => 'warta'
]);

    Route::resource('galeri', GaleriKegiatanController::class);
    Route::resource('jemaat', JemaatController::class);
    Route::resource('struktur', StrukturKepengurusanController::class);
});
