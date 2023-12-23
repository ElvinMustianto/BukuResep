<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category', [
            'title' => 'Category',
            'patrys' => Category::all()
        ]);
    }
}