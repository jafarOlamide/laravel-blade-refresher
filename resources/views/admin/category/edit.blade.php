@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category'). "/" . $category->id}}" method="POST" enctype="multipart/form-data">  
                @csrf 
                @method("PUT")
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ $category->slug}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea rows="5" class="form-control" name="description">{{$category->description}}</textarea>
                    </div> 
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" class="form-control" name="status" {{ $category->status == "1" ? "checked" : ''}}>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="popular">Popular</label>
                        <input type="checkbox" class="form-control" name="popular" {{ $category->popular == "1" ? "checked" : ''}}>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="name">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" value="{{ $category->meta_title}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="name">Meta Keywords</label>
                        <textarea rows="5" class="form-control" name="meta_keywords">{{ $category->meta_keywords}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="name">Meta Description</label>
                        <input type="text" class="form-control" name="meta_description" value="{{ $category->meta_description}}">
                    </div>
                    @if ($category->name)
                    <img src="{{ asset('assets/uploads/category/'. $category->image) }}" alt="" class="cat-image" />
                    @endif
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