<?php

namespace App\Services;

use App\Repositories\TagRepository;

class TagService
{
    private $tagRepository;

    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    public function getAllTags(){
        return $this->tagRepository->getAllTags();
    }
}
