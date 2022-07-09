<?php

namespace App\Controllers\admin;

use App\Models\Categories;
use App\Models\Post;
use App\Models\User;
use App\Services\FileUploaderService;
use App\Validators\Posts\PostValidator;
use Core\View;

class PostsController extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        View::render('admin/posts/index' , ['posts' => $posts]);
    }

    public function create()
    {
        $category = Categories::all();
        View::render('admin/posts/create', ['category' => $category]);
    }

    public function store()
    {
        $data = [];
        $category = Categories::all();
        $imagePath =  FileUploaderService::upload($_FILES['image'],POSTS_DIR);
        $validator = new PostValidator();

        if($validator->titleValidator($_POST['title']) && $validator->contentValidator($_POST['content']) && $validator->imageValidator($_FILES['image']['name']))
        {
            Post::create([
                'title' => htmlspecialchars($_POST['title']),
                'body' => htmlspecialchars($_POST['content']),
                'category_id' => $_POST['category'],
                'user_id' => $_SESSION['user_data']['id'],
                'image' => $imagePath
            ]);

            redirect('admin/posts');
        }

        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['errors'] = $validator->errors;

        View::render('admin/posts/create', ['category' => $category, 'data' => $data]);

    }


    public function edit(int $id)
    {
        $post = Post::find($id);
        $category = Categories::all();
        View::render("admin/posts/edit", ['post' => $post, 'category' => $category]);

    }

    public function update(int $id)
    {
        $validator = new PostValidator();
        $category = Categories::all();
        $post = Post::find($id);


        if($validator->titleValidator($_POST['title']) && $validator->contentValidator($_POST['body'])) {
            $postData = $_POST;
            if (!empty($_FILES) && $_FILES['image']['size'] > 0) {
                FileUploaderService::remove(POSTS_DIR . '/' . $post->image);
                $imagePath = FileUploaderService::upload($_FILES['image'], POSTS_DIR);
                $postData['image'] = $imagePath;
            }

            $post->update($postData);
            redirect('admin/posts');
        }
        $data['title'] = $_POST['title'];
        $data['body'] = $_POST['body'];
        $data['errors'] = $validator->errors;

        View::render('admin/posts/edit', ['category' => $category, 'data' => $data,'post' => $post]);

    }

    public function destroy(int $id)
    {
        Post::delete($id);
        redirect('admin/posts');
    }

}
