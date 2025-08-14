<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::with('posts')->get();
        return view('frontend.index', compact('categories'));
    }
}
