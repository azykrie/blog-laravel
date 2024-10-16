@extends('layout.app') <!-- Menggunakan layout yang dibuat -->

@section('title', 'Home Page') 

@section('content')
    @include('blog.component.featured-blog') <!-- Bagian blog unggulan -->
    @include('blog.component.main-content') <!-- Bagian konten utama -->
@endsection
