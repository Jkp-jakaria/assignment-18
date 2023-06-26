@extends('layouts.app')

@section('content')
    <h1>Latest Posts for Each Category</h1>

    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        @if ($category->latestPost)
            <p>Title: {{ $category->latestPost->title }}</p>
            <p>Content: {{ $category->latestPost->content }}</p>
            <p>Created At: {{ $category->latestPost->created_at }}</p>
        @else
            <p>No posts available for this category.</p>
        @endif
        <hr>
    @endforeach
@endsection
