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
            'active' => 'home',
            'pastrys' => Pastry::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Pastry $pastry)
    {
        return view('pastry', [
            'title' => 'Pastry',
            'active' => 'home',
            'pastry' => $pastry
        ]);
    }

}