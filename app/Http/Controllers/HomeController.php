<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Pegawai;
use App\Models\Rekam;
use DateTimeInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $today = date("d/m/Y");
        $pasien = Pasien::all();
        $countpasien = Rekam::where('diagnosa', null)->count();
        return view('dashboard', [
            'countpasientoday' => $countpasien,
            'pasien' => $pasien,
            'pegawai' => Pegawai::all(),
            'laporan' => Rekam::where('laporan', 1)->count()
        ]);
    }
    
    public function index()
    {
        $dokter = Dokter::all();
        return view('index', [
            'dokter' => $dokter 
        ]);
    }
}
