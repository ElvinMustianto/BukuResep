<?php

namespace App\Http\Controllers;

use App\Models\Pastry;
use Illuminate\Http\Request;

class PastryController extends Controller
{
    public function index()
    {
        return view('pastrys', [
            'title' => 'Home',
            'pastrys' => Pastry::latest()->filter(request(['search', 'category']))->get()
        ]);
    }

    public function show(Pastry $pastry)
    {
        return view('pastry', [
            'title' => 'Pastry',
            'pastry' => $pastry
        ]);
    }

}