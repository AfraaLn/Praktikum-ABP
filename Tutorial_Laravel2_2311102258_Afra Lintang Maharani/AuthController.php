<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        
        return back()->with('error', 'Email / password salah');
    }

   
    public function registration()
    {
        return view('registration');
    }

 
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);

       
        $validated['password'] = Hash::make($validated['password']);

        
        User::create($validated);

        
        return redirect('/registration')->with('success', 'Registrasi berhasil');
    }

    
    public function home()
    {
        
        if (!Auth::check()) {
            return redirect('/login');
        }

        
        return view('home', ['user' => Auth::user()]);
    }

    
    public function logout(Request $request)
    {
        
        Auth::logout(); 
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); 
    }
}