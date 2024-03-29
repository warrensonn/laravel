<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function products()
    {
        $products = Product::all();

        return view('products', ['products' => $products]);
    }

    public function addBasket(Request $request)
    {
        $products = Product::all();

        $productId = $request->input('product');
        if (session()->has('products') && in_array($productId, session('products'))) {
            $message = "Cet article est déjà dans le panier";
            return view('products', ['products' => $products])->with('message', $message);
        }

        // Add to the basket
        session()->push('products', $productId);
        session()->push('quantity', 1);

        return view('products', ['products' => $products]);
    }
}
