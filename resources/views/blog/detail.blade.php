@extends('layout.app')

@section('title', 'Blog Post - Start Bootstrap Template')
@section('content')
<div class="container">
    <article>
        <header class="mb-4">
            <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
            <div class="text-muted fst-italic mb-2">Posted on January 1, 2023 by Start Bootstrap</div>
            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
        </header>
        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg"
                alt="..." /></figure>
        <section class="mb-5">
            <p class="fs-5 mb-4">Science is an enterprise that should be cherished as an activity of the free human
                mind...</p>
            <p class="fs-5 mb-4">The universe is large and old, and the ingredients for life as we know it are
                everywhere...</p>
            <h2 class="fw-bolder mb-4 mt-5">I have odd cosmic thoughts every day</h2>
            <p class="fs-5 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day
                and I realized I could share them...</p>
        </section>
    </article>

    <section class="mb-5">
        <div class="card bg-light">
            <div class="card-body">
                <form class="mb-4"><textarea class="form-control" rows="3"
                        placeholder="Join the discussion and leave a comment!"></textarea></form>
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0"><img class="rounded-circle"
                            src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                    <div class="ms-3">
                        <div class="fw-bold">Commenter Name</div>
                        This is an example comment for the blog post.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection