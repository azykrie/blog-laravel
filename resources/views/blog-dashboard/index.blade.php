@extends('layout.main')
@section('title', 'Blog Dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Users Tables</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <a href="{{route('blog-dashboard.create')}}"><button type="button" class="btn btn-primary">
                    Create Blog
                </button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Featured</th>
                            <th style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blog as $index => $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->content }}</td>
                            <td>{{ $item->category->name_category }}</td>
                            <td><img src="{{ asset('images/' . $item->image) }}" alt="Image" width="100"></td>
                            <td>
                                @if($item->featured)
                                <span class="badge badge-success">Yes</span>
                                @else
                                <span class="badge badge-secondary">No</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('blog-dashboard.edit', $item->id) }}"><button
                                        class="btn btn-warning btn-sm">Edit</button></a>
                                <a href="{{ route('blog-dashboard.destroy', $item->id) }}" class="btn btn-danger btn-sm"
                                    data-confirm-delete="true">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Featured</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
</div>
@endsection