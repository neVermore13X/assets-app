<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        //show login form
        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        //validasi login form
        $credentials = $request->only('email', 'password');

        //Lakukan Auth
        if (Auth::guard('admin')->attempt($credentials)) {
            //jika auth berhasil redirek ke menu dashboard
            return redirect()->route('admin.dashboard');
        } else {
            //jika auth gagal
            return redirect()->route('admin.login')->withErrors(['email' => 'Email atau kata sandi salah']);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        //redirek ke login
        return redirect('admin.login');
    }
}
