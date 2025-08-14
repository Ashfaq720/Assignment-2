@extends('layouts.app')

@section('title', 'Create Category')

@section('content')
    <h2>Add Category</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input value="{{ old('name') }}" name="name" class="form-control" placeholder="Category name">
        </div>
        <div class="mb-3">
            <label class="form-label">Slug</label>
            <input value="{{ old('slug') }}" name="slug" class="form-control" placeholder="unique-slug">
        </div>
        <button class="btn btn-success">Save Category</button>
    </form>
@endsection
