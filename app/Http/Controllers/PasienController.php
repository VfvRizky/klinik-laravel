<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapasien = Pasien::get();
        return view('pasien', compact('datapasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien-form');
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
            'Lahir' => 'required',
            'NIK' => 'required',
            'Kelamin' => 'required',
            'Telepon' => 'required',
            'Agama' => 'required',
            'Pendidikan' => 'required',
            'Pekerjaan' => 'required'
        ]);

        $Pasien= Pasien::create([
            // 'kodepasien'=>$request->Kodepasien,
            'nama'=>ucwords(strtolower($request->Nama)),
            'alamat'=>$request->Alamat,            
            'lahir'=>$request->Lahir,            
            'nik'=>$request->NIK,
            'kelamin'=>$request->Kelamin,
            'telepon'=>$request->Telepon,
            'agama'=>$request->Agama,
            'pendidikan'=>$request->Pendidikan,
            'pekerjaan'=>$request->Pekerjaan

        ]);
        $kode= 100000+ (integer)$Pasien -> id ;
        $nomer= substr($kode, 1, 5). $Pasien -> lahir -> format ('dmy');
        $Pasien -> kodepasien = $nomer ;
        $Pasien -> save();

        return redirect('/pasien')->with('success','Data berhasil ditambahkan');

        
        // return request()->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        $pasien = Pasien::where('id', $pasien)->get();
        return view('pasien', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = Pasien::findOrfail($id);
        return view('pasien-rekammedis', compact('pasien'));
    }

    // public function ubah($id)
    // {
    //     $pasien = Pasien::findOrfail($id);
    //     return view('pasien-form-edit', compact('pasien-rekammedis'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'Nama' => 'required',
            'Alamat' => 'required',
            'Lahir' => 'required',
            'NIK' => 'required',
            'Kelamin' => 'required',
            'Telepon' => 'required',
            'Agama' => 'required',
            'Pendidikan' => 'required',
            'Pekerjaan' => 'required'
        ]);

        $pasienedit = $request->all();
        $pasien = Pasien::find($id);

        $pasien->update([
            'nama' => $request->Nama,
            'alamat' => $request->Alamat,
            'lahir' => $request->Lahir,
            'nIK' => $request->NIK,
            'kelamin' => $request->Kelamin,
            'telepon' => $request->Telepon,
            'agama' => $request->Agama,
            'pendidikan' => $request->Pendidikan,
            'pekerjaan' => $request->Pekerjaan
        ]);

        return redirect()->route('pasien.index')->with('success', 'Data telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->back();
    }
}
