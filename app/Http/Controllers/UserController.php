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
            'active' => 'penulis',
            'users' => User::latest()->get()
        ]);
    }

    public function show(User $user)
    {
        return view('pastrys', [
            'title' => 'Penulis',
            'active' => 'penulis',
            'pastrys' => $user->pastry
        ]);
    }
}