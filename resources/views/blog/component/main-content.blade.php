<div class="row">
    @foreach($blog as $post)
        <div class="col-lg-6">
            <!-- Blog post-->
            <div class="card mb-4">
                <a href="{{ route('blog-show', $post->id) }}">
                    <img class="card-img-top" src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" />
                </a>
                <div class="card-body">
                    <div class="small text-muted">{{ $post->created_at->format('F j, Y') }}</div>
                    <h2 class="card-title h4">{{ $post->title }}</h2>
                    <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                    <a class="btn btn-primary" href="{{ route('blog-show', $post->id) }}">Read more →</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="d-flex justify-content-center">
    {{ $blog->links('pagination::bootstrap-4') }}
</div>
