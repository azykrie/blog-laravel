@extends('layout.main')

@section('title', 'Edit Blog')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Blog</h1>

    <form action="{{ route('blog-dashboard.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title', $blog->title) }}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                value="{{ old('content', $blog->content) }}" required>
            @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="category"
                required>
                <option value="" disabled {{ old('category_id') ? '' : 'selected' }}>Select category</option>
                @foreach ($category as $item)
                <option value="{{ $item->id }}" {{ old('category_id', $blog->category_id) == $item->id ? 'selected' : ''
                    }}>
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
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @if ($blog->image)
            <img src="{{ asset('images/' . $blog->image) }}" alt="Current Image" width="100" class="mt-2">
            @endif
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="featured">Featured</label>
            <input type="hidden" name="featured" value="0">
            <input type="checkbox" name="featured" id="featured" value="1" {{ $blog->featured ? 'checked' : '' }}>
        </div>

        <button type="submit" class="btn btn-primary">Update Blog</button>
        <a href="{{ route('blog-dashboard.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection