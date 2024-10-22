<!-- Menampilkan Featured Post -->
@if($featuredPost)
<div class="card mb-4">
    <a href="{{ route('blog-show', $featuredPost->id) }}">
        <img class="card-img-top" src="{{ asset('images/' . $featuredPost->image) }}" alt="{{ $featuredPost->title }}" />
    </a>
    <div class="card-body">
        <div class="small text-muted">{{ $featuredPost->created_at->format('F j, Y') }}</div>
        <h2 class="card-title">{{ $featuredPost->title }}</h2>
        <p class="card-text">{{ Str::limit($featuredPost->content, 150) }}</p>
        <a class="btn btn-primary" href="{{ route('blog-show', $featuredPost->id) }}">Read more →</a>
    </div>
</div>
@endif
