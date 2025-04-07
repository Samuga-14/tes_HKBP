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

Route::get('/pages/sejarah', function () {
    return view('pages.sejarah');
})->name('pages.sejarah');

// Authentication
Auth::routes();

// Group Admin Panel (Harus Login)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // CRUD Routes
    Route::resource('berita', BeritaController::class)->names([
        'index' => 'admin.berita.index',
        'create' => 'admin.berita.create',
        'store' => 'admin.berita.store',
        'show' => 'admin.berita.show',
        'edit' => 'admin.berita.edit',
        'update' => 'admin.berita.update',
        'destroy' => 'admin.berita.destroy',
    ]);
    Route::resource('galeri', GaleriKegiatanController::class)->names([
        'index' => 'admin.galeri.index',
        'create' => 'admin.galeri.create',
        'store' => 'admin.galeri.store',
        'show' => 'admin.galeri.show',
        'edit' => 'admin.galeri.edit',
        'update' => 'admin.galeri.update',
        'destroy' => 'admin.galeri.destroy',
    ]);
    Route::resource('struktur_kepengurusan', StrukturKepengurusanController::class)->names([
        'index' => 'admin.struktur_kepengurusan.index',
        'create' => 'admin.struktur_kepengurusan.create',
        'store' => 'admin.struktur_kepengurusan.store',
        'show' => 'admin.struktur_kepengurusan.show',
        'edit' => 'admin.struktur_kepengurusan.edit',
        'update' => 'admin.struktur_kepengurusan.update',
        'destroy' => 'admin.struktur_kepengurusan.destroy',
    ]);
    Route::resource('warta', WartaController::class)->names([
        'index' => 'admin.warta.index',
        'create' => 'admin.warta.create',
        'store' => 'admin.warta.store',
        'show' => 'admin.warta.show',
        'edit' => 'admin.warta.edit',
        'update' => 'admin.warta.update',
        'destroy' => 'admin.warta.destroy',
    ]);
    Route::resource('jemaat', JemaatController::class)->names([
        'index' => 'admin.jemaat.index',
        'create' => 'admin.jemaat.create',
        'store' => 'admin.jemaat.store',
        'show' => 'admin.jemaat.show',
        'edit' => 'admin.jemaat.edit',
        'update' => 'admin.jemaat.update',
        'destroy' => 'admin.jemaat.destroy',
    ]);
});
