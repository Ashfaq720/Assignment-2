@extends('layouts.app')

@section('title', 'Delete Category')

@section('content')
    <div class="container">
        <h2>Delete Category</h2>
        <div class="alert alert-danger">
            Are you sure you want to delete the category: <strong>{{ $category->name }}</strong>?
        </div>

        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
