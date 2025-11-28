<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('app.set-session');
    }

    public function getSession(){
        $name = session()->get('nama', 'test name');
        $alamat = session()->get('alamat', 'test alamat');
        $telepon = session()->get('telepon', 'test telepon');
        return view('app.session', ['name' => $name, 'alamat' => $alamat, 'telepon' => $telepon]);
    }

    public function deleteSession(){
        session()->flush();
        return "Session deleted"; 
    }

    public function storeSession(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $telepon = $request->input('telepon');
        session()->put(['nama' => $nama, 'alamat' => $alamat, 'telepon' => $telepon]);
        return redirect()->route('session.set')->with('success', 'Data berhasil disimpan');
    }
    
}
