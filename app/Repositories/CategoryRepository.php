<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function getAllCategories()
    {
        return Category::all();
    }

    public function getCategoryById($id)
    {
        return Category::find($id);
    }

    public function createCategory($data)
    {
        return Category::create($data);
    }

    public function updateCategory($id, $data)
    {
        $category = Category::find($id);
        if (!$category) {
            return null;
        }
        $category->update($data);
        return $category;
    }
}
