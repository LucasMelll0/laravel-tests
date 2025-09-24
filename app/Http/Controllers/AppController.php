<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function category($id)
    {
        $products = Product::where('category_id', $id)->paginate(3);        
        $categoryName = $products->firstOrFail()->category->name;
        return view('product.category', compact('products', 'categoryName'));
    }
}
