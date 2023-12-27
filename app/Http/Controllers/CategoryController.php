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
            'active' => 'Category',
            'pastrys' => $category->pastry->load('user', 'category')
        ]);
    }
}