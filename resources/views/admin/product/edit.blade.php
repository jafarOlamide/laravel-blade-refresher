@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('products/')}}" method="POST" enctype="multipart/form-data">  
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Select Category</label>
                        <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea rows="2" class="form-control" name="description"></textarea>
                    </div> 
                    <div class="col-md-12 mb-3">
                        <label for="short_description">Short Description</label>
                        <textarea rows="2" class="form-control" name="short_description"></textarea>
                    </div> 
                    <div class="col-md-6 mb-3">
                        <label for="status">Cost Price</label>
                        <input type="text" class="form-control" name="cost_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Selling Price</label>
                        <input type="text" class="form-control" name="selling_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Quantity</label>
                        <input type="text" class="form-control" name="quantity">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Tax</label>
                        <input type="text" class="form-control" name="tax">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status" class="pt-4">Status</label>
                        <input type="checkbox" class="form-control" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status" class="pt-4">Trending</label>
                        <input type="checkbox" class="form-control" name="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="name">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="name">Meta Keywords</label>
                        <textarea rows="2" class="form-control" name="meta_keywords"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="name">Meta Description</label>
                        <input type="text" class="form-control" name="meta_description">
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection