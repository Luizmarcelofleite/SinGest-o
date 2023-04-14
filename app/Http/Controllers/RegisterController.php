<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }
    public function save(Request $request)
    {
      User::create([
        'name' => $request->nome,
        'email' => $request->email,
        'password' => bcrypt($request->password),
      ]);

      return to_route('login');
    }
}
