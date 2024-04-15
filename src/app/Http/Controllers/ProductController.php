<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function getAllProducts()
    {
        $products = session('products', []);
        return view('products', ['products' => $products]);
    }

    public function getProductById($id)
    {
        $products = session('products', []);
        $product = collect($products)->firstWhere('id', $id);
        return view('product', ['product' => $product]);
    }

    public function createProductView()
    {
        return view('create');
    }

    public function createProduct(Request $request)
    {

        $products = session('products', []);

        $newProduct = [
            'id' => count($products) + 1,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ];

        $products[] = $newProduct;

        session(['products' => $products]);

        return redirect()->route('products.getAllProducts');
    }
}
