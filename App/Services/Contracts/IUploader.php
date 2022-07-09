<?php
namespace App\Services\Contracts;

interface IUploader
{
    public static function upload(array $file, string $uploadDir = IMG_DIR);
    public static function remove(string $path);

}
