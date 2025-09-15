<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    /**
     * Mostrar formulario de registro
     */
    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * Registrar nuevo usuario
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user); // inicia sesión después de registrar

        return redirect('/home')->with('success', 'Usuario registrado correctamente.');
    }

    /**
     * Mostrar formulario de login
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Autenticar usuario
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden.',
        ])->onlyInput('email');
    }

    /**
     * Cerrar sesión
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    /**
     * Mostrar dashboard
     */
    public function home()
    {
        $user = Auth::user(); // obtiene el usuario autenticado (si existe)

        return view('home', [
            'user' => $user
        ]);
    }
}
