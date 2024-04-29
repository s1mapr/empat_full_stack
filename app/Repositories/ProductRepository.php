<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function getAllProducts()
    {
        return Product::with('category')->get();
    }

    public function getProductById($id)
    {
        return Product::with('category')->find($id);
    }

    public function createProduct($data)
    {
        return Product::create($data);
    }

    public function updateProduct($id, $data)
    {
        $product = Product::find($id);
        if (!$product) {
            return null;
        }
        $product->update($data);
        return $product;
    }
}
