<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'Blog Home - Start Bootstrap Template')</title> <!-- Title section -->
    <link rel="icon" type="{{asset('blog1/dist/image/x-icon')}}" href="assets/favicon.ico" />
    <link href="{{asset('blog1/dist/css/styles.css')}}" rel="stylesheet" />
</head>

<body>
    @include('blog.component.navbar')
    <!-- Navbar Include -->
    @include('blog.component.header')
    <!-- Header Include -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @yield('content')
                <!-- Main content section -->
            </div>
            <div class="col-lg-4">
                @include('blog.component.search')
                <!-- Search Include -->
                @include('blog.component.category')
                <!-- Category Include -->
                @include('blog.component.side-widget')
                <!-- Side Widget Include -->
            </div>
        </div>
    </div>
    @include('blog.component.footer')
    <!-- Footer Include -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('blog1/dist/js/scripts.js')}}"></script>
</body>

</html>