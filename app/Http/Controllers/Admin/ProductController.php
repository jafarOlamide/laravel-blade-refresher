<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    function addView()
    {
        $categories = Category::all();
        return view('admin.product.add', compact('categories'));
    }

    public function editView($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $image_name = time() . "." . $ext;
            $file->move('assets/uploads/product', $image_name);
        }

        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'cost_price' => $request->cost_price,
            'selling_price' => $request->selling_price,
            'quantity' => $request->quantity,
            'tax' => $request->tax,
            'status' => $request->status == TRUE ? '1' : '0',
            'trending' => $request->trending == TRUE ? '1' : '0',
            'image' => $image_name ? $image_name : null,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description
        ]);


        return redirect('/products')->with('status', 'Product Added Successfully!');
    }
}
