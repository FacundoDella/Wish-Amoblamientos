<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        // validar datos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required',
        ], [
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.email' => 'Por favor, introduce una dirección de correo electrónico válida.',
            'password.required' => 'El campo de contraseña es obligatorio.',
        ]);


        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect('/admin/trabajos');
    }
    public function login(Request $request)
    {
        // Validacion
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.email' => 'Por favor, introduce una dirección de correo electrónico válida.',
            'password.required' => 'El campo de contraseña es obligatorio.',
        ]);


        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('trabajos.index'));
        } else {
            return redirect('/login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
