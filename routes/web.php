<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;

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



Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pasien-form', function () {
    return view('pasien-form');
});

// route::get('/pasien', [PasienController::class, 'pasiencreate']);
// route::post('/pasienstore', [PasienController::class, 'pasienstore'])->name('pasienstore');
route::resource('/pasien', PasienController::class);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
