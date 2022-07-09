<?php

namespace App\Validators\Category;

class CategoryValidator
{
    public array $errors = [];
    public function titleValidator(string $title)
    {
        if(strlen($title) > 4){
            return true;
        }

        $this->errors[] = "Title is too short";
        return false;
    }

    public function imageValidator(string $image)
    {
        if(empty($image)){
            $this->errors[]= 'Image empty';
            return false;
        }
        return true;
    }
}