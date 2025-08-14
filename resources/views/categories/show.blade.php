@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    <div class="container">
        <h2>Category Details</h2>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>{{ $category->slug }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $category->created_at->format('Y-m-d H:i') }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ $category->updated_at->format('Y-m-d H:i') }}</td>
            </tr>
        </table>

        <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to Categories</a>
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">Edit Category</a>
    </div>
@endsection
