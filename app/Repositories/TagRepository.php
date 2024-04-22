<?php

namespace App\Repositories;

use App\Models\Tag;

class TagRepository
{
    public function getAllTags()
    {
        return Tag::all();
    }
}
