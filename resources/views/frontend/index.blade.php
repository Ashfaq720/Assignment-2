@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>Blog Categories & Posts</h1>

    @foreach ($categories as $category)
        <div class="card mb-3">
            <div class="card-header"><strong>{{ $category->name }}</strong></div>
            <div class="card-body">
                @if ($category->posts->count())
                    @foreach ($category->posts as $post)
                        <h5>{{ $post->title }}</h5>
                        <p>{{ \Illuminate\Support\Str::limit($post->content, 120) }}</p>
                        <hr>
                    @endforeach
                @else
                    <p><em>No posts in this category yet.</em></p>
                @endif
            </div>
        </div>
    @endforeach
@endsection
