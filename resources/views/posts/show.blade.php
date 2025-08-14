@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <h2>{{ $post->title }}</h2>
    <p><strong>Category:</strong> {{ $post->category ? $post->category->name : 'No Category' }}</p>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
@endsection
