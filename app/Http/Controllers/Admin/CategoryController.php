<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {
        $category = new Category();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $image_name = time() . "." . $ext;
            $file->move('assets/uploads/category', $image_name);
            $category->image = $image_name;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_description = $request->input('meta_description');

        $category->save();

        return redirect('/categories')->with('status', 'Category Added Successfully!');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if ($request->hasFile('image')) {
            $path = url('assets/uploads/category/') . $category->image;

            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $image_name = time() . "." . $ext;
            $file->move('assets/uploads/category', $image_name);
            $category->image = $image_name;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_description = $request->input('meta_description');

        $category->update();

        return redirect('/categories')->with('status', 'Category Updated Successfully!');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $path = url('assets/uploads/category/') . $category->image;

        if (File::exists($path)) {
            File::delete($path);
        }
        $category->delete();
        return redirect('/categories')->with('status', 'Category Deleted Successfully!');
    }
}
