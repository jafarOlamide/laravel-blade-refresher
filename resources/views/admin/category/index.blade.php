@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="card-header">
                    <h3>Category Page</h3>
                </div> 
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <div class="mt-4 pr-4">
                    <a class="btn bg-primary" href="{{ url('add-category')}}">Add Category</a>
                </div>
            </div>
        </div>
            
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th></tr>
                </thead> 
                <tbody>
                    @if (count($categories) === 0)
                        <td>
                            <p>No Products Available</p>
                        </td>
                    @endif
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id}}</td>
                            <td>{{ $category->name}}</td>
                            <td>{{ $category->description}}</td>
                            <td><img src="{{ asset('assets/uploads/category/'. $category->image) }}" alt="" class="cat-image" /></td>
                            <td class="flex-row">
                                <a href="{{ url("edit-category/" . $category->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ url("delete-category/" . $category->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection