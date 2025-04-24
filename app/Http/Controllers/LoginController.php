<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Email atau password salah!');
        }
    }
}
