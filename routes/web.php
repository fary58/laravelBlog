<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;




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

Route::get('/',[PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}',[PostController::class, 'show'])->name('show');
Route::get('/categories/{category:slug}',[PostController::class, 'show'])->name('show');


//Route::get('/categories/{category:slug}', function (Category $category) {
//    return view('posts' ,[
//          'posts' => $category->posts->load(['author','category',]),
//        'categories' => Category::all(),
//        'currentCategory' => $category,
//    ]);
//});

//Route::get('/authors/{author:name}', function (User $author) {
//    // print_r($author); exit;
//    return view('posts' ,[
//          'posts' => $author->posts->load(['author','category',]), // used without protected in posts model
//    ]);
//});
