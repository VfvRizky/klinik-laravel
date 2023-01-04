<?php

namespace App\Http\Controllers;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user', [
            'user' => User::all(),
            'count' => 0
        ]);
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'isadmin' => ['required'],
            'issuperadmin' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
        ]);

        User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'is_admin' => $request->isadmin,
            'is_superadmin' => $request->issuperadmin,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/akun')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit-user-form', [
            'akun' => User::find($id)
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
            'name' => ['required', 'string', 'max:255'],
            'isadmin' => ['required'],
            'issuperadmin' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $akun = User::find($id);
        $akun->name = $request->name;
        if($request->password != ''){
            $akun->password = Hash::make($request->password);
        }
        $akun->email = $request->email;
        $akun->is_admin = $request->isadmin;
        $akun->is_superadmin = $request->issuperadmin;
        $akun->save();

        
        // event(new Registered($user));

        // Auth::login($user);

        return redirect('/akun')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $akun = User::find($id);
        $akun->delete();
        return redirect('/akun')->with('success', 'Data berhasil dihapus');        
    }

    public function tambahakun()
    {
        return view('tambah-akun-form');
    }

    public function logut(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/');
    }
}
