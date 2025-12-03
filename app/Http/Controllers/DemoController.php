<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        return view('demo.index');
    }

    public function restrictedAccess()
    {
        return view('demo.restricted-access');
    }

    public function login()
    {
        return view('demo.login');
    }

    public function auth(Request $request)
    {
        if($request->email == "admin@email.com" && $request->password == "password"){
            $request->session()->put('user_id', 1);
            return redirect()->route('demo.restricted');
        }
        else{
            return redirect()->route('demo.login')->withErrors("Invalid Credentials");
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user_id');
        return redirect()->route('demo.index');
    }

    public function profile()
    {
        return view('demo.profile');
    }

    public function dashboard()
    {
        return view('demo.dashboard');
    }
}
