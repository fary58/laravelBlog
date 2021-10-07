@extends('layouts.layout')

@section('content')

@foreach ($posts as $post)
<article>

    <h1>

    Title : <b>  <a href="posts/{{$post->id}}">{{$post->title}}</b></a>

    </h1>
    <p>  <a href="authors/{{$post->author->name}}">Author : <b><?=$post->author->username; ?></b></a> </p> Category : <b>  <a href="categories/{{$post->category->id}}"> <?= $post->category->name; ?></a></b> </p>

    <div>
        <?= $post->excerpt ?>
    </div>
    </article>
    @endforeach

@endsection

