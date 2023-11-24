<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::guard('user')->attempt($data)) {
            $request->session()->regenerate();
            return redirect('/dasboard')->with('succes', 'berhasil login');
        }
        if (Auth::guard('pemilih')->attempt($data)) {
            $request->session()->regenerate();
            return redirect('/pemilih');
        }
        return back();
    }
    public function logout()
    {
        if (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        } else {
            Auth::guard('pemilih')->logout();
        }
        return redirect('/login');
    }
}


// Auth::guard('nama_providers')
//     ->attempt(['nama' => request()->input('nama')]);
