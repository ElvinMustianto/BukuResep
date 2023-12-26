<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('penulis', [
            'title' => 'Penulis',
            'users' => User::latest()->get()
        ]);
    }

    public function show(User $user)
    {
        return view('home', [
            'title' => 'Penulis',
            'users' => $user->pastry->load('category', 'user')
        ]);
    }
}