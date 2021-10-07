@extends('layouts.layout')

@section('content')
    <article>
  <h1>  {{  $post->title  }}</h1>
  <p> Author : <b><?= $post->author->username; ?></b></p>
  <p> Category : <b> <a href="categories/<?=$post->category->id;?>"> <?= $post->category->name; ?></a> </b> </p>

    <div>
       {{  $post->body }}

    </div>
    </article>

@endsection
