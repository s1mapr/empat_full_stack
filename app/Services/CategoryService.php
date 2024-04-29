<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategories()
    {
        return $this->categoryRepository->getAllCategories();
    }

    public function getCategoryById($id)
    {
        return $this->categoryRepository->getCategoryById($id);
    }

    public function createCategory($data)
    {
        return $this->categoryRepository->createCategory($data);
    }

    public function updateCategory($id, $data)
    {
        return $this->categoryRepository->updateCategory($id, $data);
    }

}
