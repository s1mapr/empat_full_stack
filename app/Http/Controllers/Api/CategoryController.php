<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Services\CategoryService;
use App\Traits\HttpResponseTrait;

class CategoryController extends Controller
{
    use HttpResponseTrait;

    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
        return $this->success(CategoryResource::collection($categories));
    }

    public function products($id)
    {
        $category = $this->categoryService->getCategoryById($id);
        if (!$category) {
            return $this->error('', 'Category not found', 404);
        }
        return $this->success(ProductResource::collection($category->products));
    }

    public function show($id)
    {
        $category = $this->categoryService->getCategoryById($id);
        if (!$category) {
            return $this->error('', 'Category not found', 404);
        }
        return $this->success(new CategoryResource($category));
    }

    public function store(CategoryRequest $request)
    {
        $category = $this->categoryService->createCategory($request->all());
        return $this->success(new CategoryResource($category));
    }

    public function update($id, CategoryRequest $request)
    {
        $category = $this->categoryService->updateCategory($id, $request->all());
        if (!$category) {
            return $this->error('', 'Category not found', 404);
        }
        return $this->success(new CategoryResource($category));
    }

}
