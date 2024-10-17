@extends('layout.main')

@section('title', 'Create Blog')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Create New Blog</h1>

    <form action="{{ route('blog-dashboard.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="name" name="title"
                value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Content</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="name" name="content"
                value="{{ old('content') }}" required>
            @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" class="form-control @error('category') is-invalid @enderror" id="category" required>
                <option value="" disabled {{ old('category') ? '' : 'selected' }}>Select category</option>
                @foreach ($category as $item)
                <option value="{{ $item->id }}" {{ old('category')==$item->id ? 'selected' : '' }}>
                    {{ $item->name_category }}
                </option>
                @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                required>
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="featured">Featured</label>
            <input type="checkbox" name="featured" id="featured" value="1" {{ old('featured') ? 'checked' : '' }}>
        </div>
        <button type="submit" class="btn btn-primary">Create Blog</button>
        <a href="{{ route('blog-dashboard.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection