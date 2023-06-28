@extends('layout')


    <link rel="stylesheet" href="/css/blog.css"><!--Link to the blog specific CSS style-->
    <link rel="stylesheet" href="/css/posts.css"><!--Link to the posts general CSS style-->

@section('title')
    <title>{{ $article->title }}</title>
@endsection


@section('header')
    <h1>{{ $article->title }}</h1>
@endsection

@section('content')
    <article>
        <p>
            {{ $article->body }}
        </p>

        <img id="world-pic" src="../../img/blog/world-pic.png" alt="World Picture">
    </article>
@endsection
