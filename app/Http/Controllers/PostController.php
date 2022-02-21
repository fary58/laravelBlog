<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return view('posts' ,[
            // 'posts'=> Post::take(1)->get()
            'posts' =>  Post::latest->filter(request(['search']))->get(), //for all
            'categories' => Category::all()
            // 'posts' => Post::with('category','author')->get()         <== without Protected
        ]);
    }


    public function show(Post $any){
        return view('post' ,[
            'post' => $any
        ]);
    }


}
