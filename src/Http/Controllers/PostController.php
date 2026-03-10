<?php

namespace Delix245\Posts\Http\Controllers;

use Delix245\Posts\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'First post'],
            ['id' => 2, 'title' => 'Second post'],
            ['id' => 3, 'title' => 'Third post'],
            ['id' => 4, 'title' => 'Fourth post'],
        ];
        return view('posts::index', compact('posts'));
    }
}
