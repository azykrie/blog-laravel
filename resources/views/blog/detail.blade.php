@extends('layout.app')

@section('title', $post->title)

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <!-- Blog Post Detail -->
            <div class="card mb-4">
                <!-- Post Image -->
                @if($post->image)
                <img class="card-img-top" src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}">
                @endif

                <!-- Card Body -->
                <div class="card-body">
                    <!-- Post Title -->
                    <h1 class="card-title fw-bold">{{ $post->title }}</h1>

                    <!-- Post Meta -->
                    <div class="text-muted mb-3">
                        <small>
                            Posted on {{ $post->created_at->format('F j, Y') }} 
                            by {{ $post->author }}
                        </small>
                        @if($post->category)
                            <span class="badge bg-primary ms-2">{{ $post->category->name }}</span>
                        @endif
                    </div>

                    <!-- Post Content -->
                    <section class="mb-4">
                        <p class="fs-5">{{ $post->content }}</p>
                    </section>

                    <!-- Back Button -->
                    <a href="{{ route('blog') }}" class="btn btn-secondary">Back to Blog</a>
                </div>
            </div>

            <!-- Recent Posts -->
            <div class="mt-5">
                <h3>Recent Posts</h3>
                <div class="row">
                    @foreach($recentPosts as $recent)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <a href="{{ route('blog-show', $recent->id) }}">
                                    <img class="card-img-top" src="{{ asset('images/' . $recent->image) }}" alt="{{ $recent->title }}">
                                </a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $recent->created_at->format('F j, Y') }}</div>
                                    <h4 class="card-title">{{ $recent->title }}</h4>
                                    <a href="{{ route('blog-show', $recent->id) }}" class="btn btn-primary">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
