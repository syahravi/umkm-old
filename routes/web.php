<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\InfoUmkm;

// Rute untuk halaman welcome
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/single', function () {
    return view('single');
});

Route::get('/info_umkm', [InfoUmkm::class, 'index'])->name('infoumkm');

Route::group([
    'prefix' => 'UMKM',
    'as' => 'umkm.',
    'namespace' => 'App\Http\Controllers',
], function () {
    Route::controller(UMKMController::class)->group(function (){
        Route::get('/', 'index')->name('index');
    });
});

Route::group([
    'middleware' => 'auth',
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'App\Http\Controllers\Admin',
], function () {
    Route::controller(DashboardController::class)->group(function (){
        Route::get('dashboard', 'index')->name('dashboard');
    });

    Route::controller(UMKMController::class)->prefix('UMKM')->group(function (){
        Route::get('/', 'index')->name('umkm.index');
        Route::get('{umkm_id}', 'show')->name('umkm.show');
        Route::get('buat', 'create')->name('umkm.create');

        Route::get('{umkm_id}/edit', 'edit')->name('umkm.edit');
        Route::delete('{umkm}/hapus', 'destroy')->name('umkm.destroy');
        Route::post('v1/store', 'store')->name('umkm.store');
        Route::post('update', 'update')->name('umkm.update');
    });
});

// Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
//     Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';