<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1, 'title' => 'Title 1', 'posted_by' => 'me', 'created_at' => '2024-07-09'],
            ['id' => 2, 'title' => 'Title 2', 'posted_by' => 'him', 'created_at' => '2024-07-09'],
            ['id' => 3, 'title' => 'Title 3', 'posted_by' => 'her', 'created_at' => '2024-07-09'],
            ['id' => 4, 'title' => 'Title 4', 'posted_by' => 'they', 'created_at' => '2024-07-09'],
        ];
        return view('posts.index', ['posts' => $allPosts]);
    }

    public function show($postId){
        $singlePost = [
            'id' => 1, 'title' => 'Title 1', 'Description' => 'this is a description','posted_by' => 'me', 'created_at' => '2024-07-09'
        ];
            return view('posts.show',['post' => $singlePost]);
    }
}
