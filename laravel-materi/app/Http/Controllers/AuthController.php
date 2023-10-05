<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    //form register
    public function register(Request $request)
    {
        return view('auth.register');
    }

    //store register
    public function store(Request $request, User $user, Auth $auth)
    {
        $request->validate([
            'nama' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users,email',
            'password' => 'required|max:8'
        ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credential = $request->only('email','password');
        $auth::attempt($credential);
        $request->session()->regenerate();

        return redirect()->route('auth.dashboard')
        ->withSuccess('PULU PULU');
    }

    //form login
    public function login()
    {
        return view('auth.login');
    }

    //authentication
    public function authentication()
    {
        
    }

    //dashboard
    public function dashboard()
    {
        if(Auth::check()){
            return view('auth.dashboard');
        }
        return redirect()->route('auth.login');
    }

    //logout
    public function logout()
    {

    }
}