<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
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

Route::view('/', 'index');


Route::middleware(['auth', 'roles:superadmin,admin'])->group(function () {
    Route::middleware('roles:superadmin')->group(function () {
        // Route::resource('user', UserController::class);    
    });

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::view("pasien-form", 'pasien-form');
   

    route::resource('/pasien', PasienController::class);

    route::resource('/dokter', DokterController::class);
    Route::view("dokter-form", 'dokter-form');

    route::resource('/jadwal', JadwalController::class);
    Route::view("jadwal-form", 'jadwal-form');
});


require __DIR__.'/auth.php';
