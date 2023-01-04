<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapegawai = Pegawai::get();
        return view('pegawai', compact('datapegawai'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai-form');
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
            'KodePegawai' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Kelamin' => 'required',
            'Telepon' => 'required',
            'Agama' => 'required',
            'Jabatan' => 'required'
        ]);

        $Pegawai= Pegawai::create([
            'kodepegawai'=>$request->KodePegawai,            
            'nama'=>ucwords(strtolower($request->Nama)),
            'alamat'=>$request->Alamat,            
            'kelamin'=>$request->Kelamin,
            'telepon'=>$request->Telepon,
            'agama'=>$request->Agama,
            'jabatan'=>$request->Jabatan,
        ]);

        return redirect('/pegawai')->with('success','Data berhasil ditambahkan');
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
        $pegawai = Pegawai::findOrfail($id);

        return view('pegawai-form-edit', [
            'pegawai' => $pegawai
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
        $request->validate([
            'KodePegawai' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Kelamin' => 'required',
            'Telepon' => 'required',
            'Agama' => 'required',
            'Jabatan' => 'required'
        ]);

        $pegawai = Pegawai::find($id);

        $pegawai->update([
            'kodepegawai' => $request->KodePegawai,
            'nama' => $request->Nama,
            'alamat' => $request->Alamat,
            'kelamin' => $request->Kelamin,
            'telepon' => $request->Telepon,
            'agama' => $request->Agama,
            'jabatan' => $request->Jabatan
        ]);
        
        return redirect('pegawai')->with('success', 'Data terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return redirect('pegawai')->with('success', 'Data terhapus');
    }
}
