<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view ('auth/login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            // Mendapatkan peran (role) pengguna yang berhasil login
            $user = Auth::user();
            $idRole = $user->id_role;
    
            if ($idRole === 1) {
                return redirect('/admin');
            } elseif ($idRole === 2) {
                return redirect('/belanja');
            }
        }
    
        return back()->with('loginError', 'Login failed');
    }
    

    public function logout()
{
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
}
}