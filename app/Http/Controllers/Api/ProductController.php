<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Services\ProductService;
use App\Traits\HttpResponseTrait;

class ProductController extends Controller
{
    use HttpResponseTrait;

    private ProductService $productService;


    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProducts();
        return $this->success(ProductResource::collection($products));
    }

    public function show($id)
    {
        $product = $this->productService->getProductById($id);
        if (!$product) {
            return $this->error('', 'Product not found', 404);
        }
        return $this->success(new ProductResource($product));
    }

    public function store(CreateProductRequest $request)
    {
        $product = $this->productService->createProduct($request->all());
        return $this->success(new ProductResource($product));
    }

    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productService->updateProduct($id, $request->all());
        if (!$product) {
            return $this->error('', 'Product not found', 404);
        }
        return $this->success(new ProductResource($product));
    }
}
