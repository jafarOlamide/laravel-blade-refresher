@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert -category')}}" method="POST" enctype="multipart/form-data">  
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea rows="5" class="form-control" name="description"></textarea>
                    </div> 
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" class="form-control" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="popular">Popular</label>
                        <input type="checkbox" class="form-control" name="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="name">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="name">Meta Keywords</label>
                        <textarea rows="5" class="form-control" name="meta_keywords"></textarea>
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