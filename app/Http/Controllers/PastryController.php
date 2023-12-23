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
            'patrys' => Pastry::all()
        ]);
    }

    public function show($slug)
    {
        return view('pastry', [
            'title' => 'Pastry',
            'pastry' => Pastry::find($slug)
        ]);
    }
}