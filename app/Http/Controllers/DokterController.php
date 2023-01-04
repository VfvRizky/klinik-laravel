<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datadokter = Dokter::get();
        return view('dokter', compact('datadokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadwalvariabel = Jadwal::all();
        return view('dokter-form', [
            'jadwalvariabel' => $jadwalvariabel,
            'poli' => Poli::all()
        ]);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'Nama' => 'required',
            'Alamat' => 'required',
            'Spesialis' => 'required',
            'Telepon' => 'required',
            'Jadwal' => 'required'

        ]);

        $Dokter= Dokter::create([
           
            'nama'=>ucwords(strtolower($request->Nama)),
            'alamat'=>$request->Alamat,            
            'id_poli'=>$request->Spesialis,            
            'telepon'=>$request->Telepon,
            'jadwalpraktek'=>$request->Jadwal

        ]);
     

        return redirect('/dokter')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        $dokter = Dokter::where('id', $dokter)->get();
        return view('dokter', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwalvariabel = Jadwal::all();
        $dokter = Dokter::findOrfail($id);
        $poli = Poli::all();
        return view('dokter-form-edit', compact('dokter','jadwalvariabel', 'poli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $this->validate($request, [
            
            'Nama' => 'required',
            'Alamat' => 'required',
            'Spesialis' => 'required',
            'Telepon' => 'required',
            'Jadwal' => 'required'

        ]);

        $dokteredit = $request->all();
        $dokter = Dokter::find($id);

        $dokter->update([
          
            'nama'=>ucwords(strtolower($request->Nama)),
            'alamat'=>$request->Alamat,            
            'id_poli'=>$request->Spesialis,            
            'telepon'=>$request->Telepon,
            'jadwalpraktek'=>$request->Jadwal

        ]);

        return redirect()->route('dokter.index')->with('success', 'Data telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Dokter  $dokter
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        $dokter->delete();
        return redirect()->back();
    }
}
