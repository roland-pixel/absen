<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AsistenController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\MatkulKelasController;
use App\Models\Asisten;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\MatkulKelas;
use Illuminate\Support\Facades\Route;

// 🔹 Halaman Login
Route::get('/', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/', [UserController::class, 'login'])->name('login.process');

// 🔹 Grup route yang butuh login
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        $jumlahMatkul = Matkul::count();
        $jumlahAsisten = Asisten::count();
        $jumlahDosen = Dosen::count();
        $jumlahMatkulKelas = MatkulKelas::count();

        return view('dashboard', compact(
            'jumlahMatkul',
            'jumlahAsisten',
            'jumlahDosen',
            'jumlahMatkulKelas'
        ));
    })->name('dashboard');

    // Logout
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    // 🔹 Asisten
    Route::controller(AsistenController::class)->group(function () {
        Route::get('/kelola-asisten', 'index')->name('kelolaasisten');
        Route::get('/kelola-asisten/tambah', 'create')->name('asisten.tambah');
        Route::post('/kelola-asisten', 'store')->name('asisten.store');
        Route::get('/kelola-asisten/{asisten}/edit', 'edit')->name('asisten.edit');
        Route::put('/kelola-asisten/{asisten}', 'update')->name('asisten.update');
        Route::delete('/kelola-asisten/{asisten}', 'destroy')->name('asisten.destroy');
    });

    // 🔹 Dosen
    Route::controller(DosenController::class)->group(function () {
        Route::get('/kelola-dosen', 'index')->name('keloladosen');
        Route::get('/kelola-dosen/tambah', 'create')->name('dosen.tambah');
        Route::post('/kelola-dosen', 'store')->name('dosen.store');
        Route::get('/kelola-dosen/{dosen}/edit', 'edit')->name('dosen.edit');
        Route::put('/kelola-dosen/{dosen}', 'update')->name('dosen.update');
        Route::delete('/kelola-dosen/{dosen}', 'destroy')->name('dosen.destroy');
    });

    // 🔹 Matkul
    Route::controller(MatkulController::class)->group(function () {
        Route::get('/kelola-matkul', 'index')->name('kelolamatkul');
        Route::get('/kelola-matkul/tambah', 'create')->name('matkul.tambah');
        Route::post('/kelola-matkul', 'store')->name('matkul.store');
        Route::get('/kelola-matkul/{matkul}/edit', 'edit')->name('matkul.edit');
        Route::put('/kelola-matkul/{matkul}', 'update')->name('matkul.update');
        Route::delete('/kelola-matkul/{matkul}', 'destroy')->name('matkul.destroy');
    });

    // 🔹 Matkul Kelas
    Route::prefix('kelola-matkul-kelas')->name('matkulkelas.')->group(function () {
        Route::get('/', [MatkulKelasController::class, 'index'])->name('index');
        Route::get('/tambah', [MatkulKelasController::class, 'create'])->name('tambah');
        Route::post('/', [MatkulKelasController::class, 'store'])->name('store');
        Route::get('/{matkulkelas}/edit', [MatkulKelasController::class, 'edit'])->name('edit');
        Route::put('/{matkulkelas}', [MatkulKelasController::class, 'update'])->name('update');
        Route::delete('/{matkulkelas}', [MatkulKelasController::class, 'destroy'])->name('destroy');
    });

    // 🔹 Absen
    Route::get('/kelola-absen', [AbsenController::class, 'index'])->name('absen.index');
    Route::get('/kelola-absen/cetak', [AbsenController::class, 'cetak'])->name('absen.cetak');
});
