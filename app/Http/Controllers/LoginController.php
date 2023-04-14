<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email.required'=> 'O campo email é obrigatóro',
            'email.email'=> 'O email não é valido',
            'password.requered'=> 'O campo senha é obrigatorio ',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        } else {
            return redirect()->back()->with('erro','Email ou senha inválida.');
        }

    }

    public function logout()
    {
        if (Auth::check()){
            Auth::logout();
        }

        return to_route('login');
    }
}
