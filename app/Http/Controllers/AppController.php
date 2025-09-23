<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function index()
    {
        $products = Product::paginate(4);
        return view('product.products', compact('products'));
    }

    public function details($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product.product-details', compact('product'));
    }
}
