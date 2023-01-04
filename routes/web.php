<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiagnosaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;
use League\CommonMark\Extension\SmartPunct\DashParser;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// user
Route::get('/', [HomeController::class, 'index']);
Route::get('/antrian-pasien', [PasienController::class, 'antrianpasien']);
Route::post('/cekpasienlama', [PasienController::class, 'cekpasienlama']);
Route::get('/pasien-lama', [PasienController::class, 'pasienlama']);
Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');
Route::post('/addrekam', [RekamController::class, 'store']);

Route::view("buku-panduan", 'buku-panduan');
Route::view("buku-panduan-admin", 'buku-panduan-admin');

// admin
Route::group(['middleware' => 'isAdmin'], function () {
    // Route::view("pasien-form", 'pasien-form')->middleware('auth');
    Route::get('/chartlayanan', [DashboardController::class, 'chartlayanan']);
    Route::get('/piechart', [DashboardController::class, 'piechart']);
    Route::view("dokter-form", 'dokter-form')->middleware('auth');
    Route::view("jadwal-form", 'jadwal-form')->middleware('auth');
    Route::view('/diagnosa-form', 'diagnosa-form')->middleware('auth');
    Route::view('/obat-stok', 'obat-stok')->middleware('auth');
    Route::view('/jenis-obat-create', 'jenis-obat-form')->middleware('auth');

    Route::get('/antrian-pasien-admin', [DashboardController::class, 'antrianpasien'])->middleware('auth');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
    Route::get('/diagnosa', [DashboardController::class, 'diagnosa'])->middleware('auth');
    Route::get('/obat-jenis', [JenisController::class, 'index'])->middleware('auth');
    Route::get('/obat-form', [ObatController::class, 'form'])->middleware('auth');
    Route::get('/obat-total-stok', [ObatController::class, 'index'])->middleware('auth');
    Route::get('pasien/{od:od}/editrekam/{id:id}', [DashboardController::class, 'editrekam'])->middleware('auth');
    Route::get('edit-stok/{id}', [ObatController::class, 'editstok'])->middleware('auth');
    Route::get('/tambahpasienadmin', [DashboardController::class, 'tambahpasienform'])->middleware('auth');
    Route::get('/pendaftaran', [DashboardController::class, 'pendaftaran'])->middleware('auth');
    Route::get('/poli-form', [PoliController::class, 'index'])->middleware('auth');
    Route::get("laporan-harian", [DashboardController::class, 'indexlaporan'])->middleware('auth');
    Route::get('/akun', [UserController::class, 'index'])->middleware('auth');
    Route::get('/tambah-akun', [UserController::class, 'tambahakun'])->middleware('auth');

    Route::post('/updaterekamadmin', [DashboardController::class, 'updaterekam'])->middleware('auth');
    Route::post('/cekpasienlamaadmin', [DashboardController::class, 'cekpasienlama'])->middleware('auth');
    Route::post('/addrekamadmin', [DashboardController::class, 'addrekam'])->middleware('auth');
    Route::post('tambahpasien', [DashboardController::class, 'tambahpasien'])->middleware('auth');
    Route::post('rekam-store', [PasienController::class, 'rekamstore'])->middleware('auth');
    Route::post('update-pasien', [PasienController::class, 'updatepasien'])->middleware('auth');
    Route::post('/tambahstok', [ObatController::class, 'tambahstok'])->middleware('auth');
    Route::post('/clearlaporan', [DashboardController::class, 'clearlaporan'])->middleware('auth');
    Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
    
    Route::resource('/poli', PoliController::class)->middleware('auth');
    route::resource('/pasien', PasienController::class, [
        'except' => ['store']
    ])->middleware('auth');
    Route::resource('rekam', RekamController::class)->middleware('auth');
    route::resource('/dokter', DokterController::class)->middleware('auth');
    Route::resource('/diagnosatools', DiagnosaController::class)->middleware('auth');
    Route::resource('/obat', ObatController::class)->middleware('auth');
    route::resource('/jadwal', JadwalController::class)->middleware('auth');
    Route::resource('/jenis', JenisController::class)->middleware('auth');
    Route::resource('/user', UserController::class)->middleware('auth');
    Route::resource("/pegawai", PegawaiController::class)->middleware('auth');
});


Route::group(['middleware' => 'isSuperAdmin'], function () {
    Route::get('/akun', [UserController::class, 'index'])->middleware('auth');
    Route::get('/tambah-akun', [UserController::class, 'tambahakun'])->middleware('auth');
    Route::resource('/user', UserController::class)->middleware('auth');
});

// Route::middleware(['auth', 'roles:superadmin,admin'])->group(function () {
//     Route::middleware('roles:superadmin')->group(function () {
//         // Route::resource('user', UserController::class);    
//     });

require __DIR__ . '/auth.php';
