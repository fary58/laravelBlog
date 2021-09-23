@extends('layouts.layout')

@section('content')

@foreach ($posts as $post)
<article>

    <h1>

        <a href="posts/{{$post->id}}">{{$post->title}}</a>

    </h1>
    <p> <a href="categories/{{$post->category->id}}"> <?= $post->category->name; ?></a> </p>

    <div>
        <?= $post->excerpt ?>
    </div>
    </article>
    @endforeach

@endsection

