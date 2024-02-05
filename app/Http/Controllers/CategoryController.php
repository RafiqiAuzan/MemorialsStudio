<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $gallery = Gallery::all();

        return view('pages.welcome', compact('category', 'gallery'));
    }
}