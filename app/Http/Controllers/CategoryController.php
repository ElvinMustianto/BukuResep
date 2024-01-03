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
            'category' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('pastrys', [
            'title' => 'Category',
            'pastrys' => $category->pastry
        ]);
    }
}