<?php

namespace App\Http\Controllers;

use App\Models\Rekam;
use App\Models\Pasien;
use App\Models\Obat;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagnosa = Rekam::find($id);
        return view('diagnosa-form', [
            'diagnosa' => $diagnosa,
            'obat' => Obat::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            // 'kodepasien' => 'required',
            'diagnosa' => 'required',
            // 'obat' => 'required',
            // 'jumlahobat' => 'required',
            // 'keterangan' => 'required',
            // 'Ruang' => 'required',
            // 'Darah' => 'required',
            // 'Tinggi' => 'required',
            // 'Berat' => 'required',
            // 'LingkarBadan' => 'required'
        ]); 

        $rekam = Rekam::find($id);
        $rekam->diagnosa = $validated['diagnosa'];
        $rekam->laporan = 1;

        if($request->obat != ''){
            $rekam->id_obat = $request->obat;
        }

        if($request->jumlahobat != ''){
            $rekam->jumlahobat = $request->jumlahobat;
        }

        if($request->keterangan != ''){
            $rekam->keterangan = $request->keterangan;
        }
        
        if($request->Ruang != ''){
            $rekam->rawat = $request->Ruang;
        }
        
        if($request->Lamabaru != ''){
            $rekam->lamabaru = $request->Lamabaru;
        }

        if($request->Darah != ''){
            $rekam->darah = $request->Darah;
        }

        if($request->Berat != ''){
            $rekam->berat = $request->Berat;
        }

        if($request->LingkarBadan != ''){
            $rekam->pinggang = $request->LingkarBadan;
        }

        if($request->obat != ''){
            $obat = Obat::find($request->obat);
            $obat->stok = $obat->stok - $request->jumlahobat;
            $obat->save();
        }
        // $rekam->jumlahobat = $validated['jumlahobat'];
        // // $rekam->keterangan = $validated['keterangan'];
        // $rekam->rawat = $validated['Ruang'];
        // $rekam->darah = $validated['Darah'];
        // $rekam->tinggi = $validated['Tinggi'];
        // $rekam->berat = $validated['Berat'];
        // $rekam->pinggang = $validated['LingkarBadan'];
        $rekam->save();
        
        $idpasien = $rekam->id_pasien;
        
        if($request->kodepasien != '')
        {
            $pasien = Pasien::find($idpasien);
            $pasien->kodepasien = $request->kodepasien.$pasien->kodepasien;
            $pasien->save();
        }

        return redirect('diagnosa')->with('success', 'Sukses memberi diagnosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
