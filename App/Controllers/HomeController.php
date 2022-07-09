<?php

namespace App\Controllers;

use App\Helpers\SessionHelper;
use App\Models\Categories;
use App\Models\Post;
use Core\Controller;
use Core\View;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::all();
        $categories = Categories::all();
        View::render('home/index', ['posts' => $posts, 'categories' => $categories]);
    }
}
