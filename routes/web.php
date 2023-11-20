<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(AuthController::class)->group(function() {
    Route::get('/registration', 'register')->name('auth.register'); 
    Route::post('/store', 'store')->name('auth.store');
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/auth', 'auth')->name('auth.authentication');
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
    Route::post('/logout', 'logout')->name('auth.logout');
});

Route::get('/', function () {
    return view('auth.register');
});


Route::get('/penyewa', [PenyewaController::class, 'index'])->name('penyewa.index');
Route::get('/penyewa/create', [PenyewaController::class, 'create'])->name('penyewa.create');
Route::post('/penyewa/create', [PenyewaController::class, 'store'])->name('penyewa.store');
Route::get('/penyewa/{penyewa}', [PenyewaController::class, 'show'])->name('penyewa.show');
Route::get('/penyewa/{penyewa}/edit', [PenyewaController::class, 'edit'])->name('penyewa.edit');
Route::put('/penyewa/{penyewa}', [PenyewaController::class, 'update'])->name('penyewa.update');
Route::delete('penyewa/{penyewa}', [PenyewaController::class, 'destroy'])->name('penyewa.destroy');

Route::get('/properti', [PropertiController::class, 'index'])->name('properti.index');
Route::get('/properti/create', [PropertiController::class, 'create'])->name('properti.create');
Route::post('/properti/create', [PropertiController::class, 'store'])->name('properti.store');
Route::get('/properti/{properti}', [PropertiController::class, 'show'])->name('properti.show');
Route::get('properti/{properti}/edit', [PropertiController::class, 'edit'])->name('properti.edit');
Route::put('properti/{properti}', [PropertiController::class, 'update'])->name('properti.update');
Route::delete('properti/{properti}', [PropertiController::class, 'destroy'])->name('properti.destroy');


Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
Route::get('admins/create', [AdminController::class, 'create'])->name('admins.create');
Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');
Route::get('admins/{admin}', [AdminController::class, 'show'])->name('admins.show');
Route::get('admin/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('admins/{admin}', [AdminController::class, 'update'])->name('admins.update');
Route::delete('admin/{admin}', [AdminController::class, 'destroy'])->name('admin.destroy');


