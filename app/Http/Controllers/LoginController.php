<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/Startsite';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        //dd($request->all());
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/dashboard');
        }
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return redirect('/login')->with('error', 'Username atau password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
