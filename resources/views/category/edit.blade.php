@extends('layout.main')

@section('title', 'Edit User')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Category</h1>
    
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="name">Name Category</label>
            <input type="text" class="form-control @error('name_category') is-invalid @enderror" id="name" name="name_category" value="{{ old('name_category', $category->name_category) }}" required>
            @error('name_category')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Category</button>
        <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
