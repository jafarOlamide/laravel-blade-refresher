@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="card-header">
                    <h3>Products</h3>
                </div> 
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <div class="mt-4 pr-4">
                    <a class="btn bg-primary" href="{{ url('products/add')}}">Add Product</a>
                </div>
            </div>
        </div>
            
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Cost Price</th>
                        <th>Selling Price</th>
                        <th>Quantity</th>
                        <th>Tax</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>
                </thead> 
                <tbody>
                    @if (count($products) === 0)
                        <td>
                            <p>No Products Available</p>
                        </td>
                    @endif
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id}}</td>
                            <td>{{ $product->name}}</td>
                            <td>{{ $product->category_id}}</td>
                            <td>{{ $product->description}}</td>
                            <td>{{ $product->cost_price}}</td>
                            <td>{{ $product->selling_price}}</td>
                            <td>{{ $product->quantity}}</td>
                            <td>{{ $product->tax}}</td>
                            <td>{{ $product->status}}</td>
                            <td><img src="{{ asset('assets/uploads/product/'. $product->image) }}" alt="" class="cat-image" /></td>
                            <td>{{ date("d-m-Y", strtotime($product->created_at))}}</td>
                            <td class="flex-row">
                                <a href="{{ url("products/edit" . $product->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ url("product/delete" . $product->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection