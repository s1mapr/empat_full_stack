<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Services\TagService;

class TagController extends Controller
{

    private $tagService;

    public function __construct(TagService $tagService)
    {
        $this->tagService = $tagService;
    }
    public function index(){
        $tags = $this->tagService->getAllTags();
        return view('tags.index', compact('tags'));
    }

    public function show(Tag $tag){
        return view('tags.show', compact('tag'));
    }
}
