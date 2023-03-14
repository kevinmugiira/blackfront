<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('');
    }

    public function store(Request $request) {
        $product = new Product();

        $product->name = $request->input('name');
        $product->url = $request->input('url');
        $product->description = $request->input('description');

        if ($request->hasFile('prod_image'))
        {
            $image_file = $request->file('prod_image');
            $img_extension = $image_file->getClientOriginalExtension(); //retrieving image extension
            $img_filename = time(). '.' . $img_extension;
            $image_file->move('uploads/products/', $img_filename);
            $product->image = $img_filename;
        }


        $product->original_price = $request->input('original_price');
        $product->offer_price = $request->input('offer_price');
        $product->quantity = $request->input('quantity');
        $product->priority = $request->input('priority');

        $product->save();

        return redirect()->back()
            ->with('status', 'Product Added Successfully!');

    }
}
