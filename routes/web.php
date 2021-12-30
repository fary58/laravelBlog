<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;



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
    return view('posts' ,[
        // 'posts'=> Post::take(1)->get()
        'posts' => Post::all() //for all
        // 'posts' => Post::with('category','author')->get()         <== without Protected
  ]);
});


Route::get('/posts/{any}', function (Post $any) {
    return view('post' ,[
          'post' => $any
    ]);
});

Route::get('/categories/{category}', function (Category $category) {
    return view('posts' ,[
          'posts' => $category->posts->load(['author','category',])
    ]);
});

Route::get('/authors/{author:name}', function (User $author) {
    // print_r($author); exit;
    return view('posts' ,[
          'posts' => $author->posts->load(['author','category',]) // used without protected in posts model
    ]);
});
