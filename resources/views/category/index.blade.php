@extends('layout.main')
@section('title' , 'Category')
    
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Users Tables</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <a href="{{route('category.create')}}"><button type="button" class="btn btn-primary">
                Create Category
            </button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th>Name Category</th>
                            <th style="width: 20%">Action</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $index => $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name_category}}</td>
                            <td>
                                <a href="{{route('category.edit', $item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>                                
                                <a href="{{ route('category.destroy', $item->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name Category</th>
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