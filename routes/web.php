<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UMKMController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfoUmkm;

// Rute untuk halaman welcome
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/single', function () {
    return view('single');
});

Route::get('/info_umkm', [InfoUmkm::class, 'index'])->name('infoumkm');
// Rute dashboard dan profil yang hanya dapat diakses oleh pengguna yang telah masuk (autentikasi).

Route::middleware(['auth', 'verified', 'isAdmin'])->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // *UMKM
    // Rute untuk tampilan UMKM yang dapat diakses oleh pengguna tanpa harus login.
    Route::get('umkm', [UMKMController::class, 'index'])->name('umkms.index');

	Route::get('umkm/create', [UMKMController::class, 'create'])->name('umkms.create');

    // Rute untuk menampilkan detail UMKM
    Route::get('umkm/{umkm}', [UMKMController::class, 'show'])->name('umkms.show');

	Route::get('umkm/{umkm}/edit', [UMKMController::class, 'edit'])->name('umkms.edit');
	Route::delete('umkm/{umkm}', [UMKMController::class, 'destroy'])->name('umkms.destroy');
	Route::post('v1/umkm/store', [UMKMController::class, 'store'])->name('umkms.store');
	Route::post('v1/umkm/edit', [UMKMController::class, 'update'])->name('umkms.update');
});

require __DIR__ . '/auth.php';