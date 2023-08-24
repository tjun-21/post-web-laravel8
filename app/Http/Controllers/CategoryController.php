<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'active' => 'categories',
            'title' => 'Post Category',
            'categories' => Category::all()
        ]);
    }

    public function whereall(Category $category)
    {
        return view('posts', [
            'title' => "Post By Category :  $category->name",
            'active' => "all-Post",
            'posts' => $category->posts->load('author', 'category'),
            'category' => $category->name
        ]);
    }
}
