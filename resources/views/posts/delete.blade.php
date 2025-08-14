@extends('layouts.app')

@section('title', 'Delete Post')

@section('content')
    <h2>Delete Post</h2>
    <p>Are you sure you want to delete the post <strong>{{ $post->title }}</strong>?</p>

    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Yes, Delete</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
