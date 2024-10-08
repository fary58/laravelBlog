<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
//        dd(request(['category']));
        return view('posts.index' ,[
        // 'posts'=> Post::take(1)->get()
            'posts' =>  Post::latest()->filter(request(['search','category','author']))->get(), //for all
            // 'posts' => Post::with('category','author')->get()         <== without Protected
        ]);
    }


    public function show(Post $post){
//       dd($post);
        return view('posts.show' ,[
            'post' => $post
        ]);
    }


}
