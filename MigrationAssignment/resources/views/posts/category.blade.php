@extends('layouts.app')

@section('content')
    <h1>Posts in {{ $category->name }} Category</h1>

    @if ($posts->count() > 0)
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <p>Category: {{ $post->category->name }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No posts found in this category.</p>
    @endif
@endsection
