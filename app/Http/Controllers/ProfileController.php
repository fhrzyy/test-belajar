<?php
// filepath: e:\laragon\www\belajar\app\Http\Controllers\ProfileController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        
        return view('profile');
    }
}