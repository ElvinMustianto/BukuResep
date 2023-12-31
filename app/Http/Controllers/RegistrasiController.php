<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return $request->all();
    }
}