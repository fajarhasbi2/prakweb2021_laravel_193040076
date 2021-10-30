@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title}}</h1>

    <P>By. <a href="/posts/{{ $posts->slug }}" class="text-decoration-none">{{ $post->user->name }}</a> in 
        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/posts" class="d-block mt-3">Back to Posts</a>
@endsection