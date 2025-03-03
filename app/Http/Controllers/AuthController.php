<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showClandingForm()
    {
        return view('Clanding');
    }

    public function showC_historialForm()
    {
        return view('C_historial');
    }

    public function showDlandingForm()
    {
        return view('Dlanding');
    }

    public function showDBAlandingForm()
    {
        return view('DBAlanding');
    }

    public function showD_historialForm()
    {
        return view('D_historial');
    }

    public function showD_reservaForm()
    {
        return view('D_reserva');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'Credenciales incorrectas'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
