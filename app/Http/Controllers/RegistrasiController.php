<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'login'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required|min:3|max:20|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

    }
}