<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request): RedirectResponse
    {
        
        User::query()->create($request->validated());   
        return redirect()->back()->with('success', 'Berhasil melakukan registrasi!');
    }

}
