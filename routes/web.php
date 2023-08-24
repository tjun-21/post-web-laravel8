<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Tajun Nur, S.Tr.Kom",
        "email" => "tajunnur46@gmail.com",
        "img" => "profil.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

//single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//data category
Route::get('/categories', [CategoryController::class, 'index']);

// //data post berdasarkan category
Route::get('/categories/{category:slug}', [CategoryController::class, 'whereall']);
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('category', [
//         'title' => $category->name,
//         'posts' => $category->posts,
//         'category' => $category->name
//     ]);
// });

// Route::get('/categories', function () {
//     return view('categories', [
//         'title' => 'Post Categories',
//         'categories' => Category::all()
//     ]);
// });


// Route::get('/authors/{user}', function (User $user) {
//     return view('posts', [
//         'title' => 'User POsts',
//         'posts' => $user->posts,
//         // 'category' => $category->name
//     ]);
// });
Route::get('/authors/{author:username}', [UserController::class, 'whereall']);
