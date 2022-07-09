<?php

namespace App\Controllers\admin;

use App\Models\Categories;
use App\Models\Post;
use App\Models\User;
use Core\View;

class DashboardController extends BaseController
{
    public function index()
    {
        $posts = Post::limit(3);
        $categories = Categories::limit(3);
        $qntyUsers = User::qntyRows('users');
        $qntyPosts = Post::qntyRows('posts');
        $qntyCats = Post::qntyRows('categories');

        View::render('admin/pages/dashboard', ['posts' => $posts, 'categories' => $categories,
            'qnty' => ['qntyUsers' => $qntyUsers, 'qntyPosts'=>$qntyPosts, 'qntyCats' => $qntyCats]]);
    }
}