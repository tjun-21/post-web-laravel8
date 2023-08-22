<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Post Category',
            'categories' => Category::all()
        ]);
    }

    public function whereall(Category $category)
    {
        return view('posts', [
            'title' => "Post By Category :  $category->name",
            'posts' => $category->posts,
            'category' => $category->name
        ]);
    }
}
