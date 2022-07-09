<?php

namespace App\Controllers;

use App\Models\Categories;
use App\Models\Post;
use Core\Controller;
use Core\View;

class PostsController extends Controller
{
    public function singlePost(int $id)
    {
        $post = Post::find($id);
        $category = Categories::find($post->category_id);
        View::render('singlePost/singlePost', ['post' => $post, 'category' => $category]);
    }

    public function posts()
    {
        $posts = Post::all();
        $category = Categories::all();
        View::render('posts/posts', ['posts' => $posts, 'category' => $category]);
    }

}
