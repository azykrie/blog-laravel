<div class="mb-5">
    @if(!Request::is('detail-blog'))
    <header class="position-relative">
        <img src="{{ asset('img/work.jpg') }}" alt="Welcome Image" class="img-fluid w-100"
            style="height: 400px; object-fit: cover;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.8);"></div>
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white"
            style="padding: 20px; border-radius: 10px;">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis molestiae minus
                odit accusantium repellendus et expedita est dolorum placeat odio enim atque voluptatibus vel quisquam,
                laborum magnam. Fugiat, facilis dolor?</p>
        </div>
    </header>
    @endif
</div>