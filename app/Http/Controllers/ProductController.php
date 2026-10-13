<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('category')->active();

        if ($request->filled('kategori')) {
            $query->where('category_id', $request->kategori);
        }

        if ($request->filled('cari')) {
            $query->where('name', 'like', '%' . $request->cari . '%');
        }

        $products = $query->latest()->paginate(9)->withQueryString();

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        $product->load(['category', 'reviews.user']);
        return view('products.show', compact('product'));
    }
}
