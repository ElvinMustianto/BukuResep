<?php

namespace App\Http\Controllers;

use App\Models\Pastry;
use Illuminate\Http\Request;

class PastryController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'pastrys' => Pastry::with(['user', 'category'])->latest()->get()
        ]);
    }

    public function show($slug)
    {
        return view('pastry', [
            'title' => 'Pastry',
            'pastrys' => Pastry::find($slug)
        ]);
    }
}