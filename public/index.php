<?php

require_once dirname(__DIR__) . '/Config/constants.php';
require_once BASE_URL. '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(BASE_URL);
$dotenv->load();

use App\Models\User;

if (!session_id()) {
    session_start();

}


try{
    $router = new \Core\Router();

    require_once BASE_URL . '/routes/web.php';


    if(!preg_match('/assets/i', $_SERVER['REQUEST_URI']) || !preg_match('/admin/i', $_SERVER['REQUEST_URI']))
    {
        $router->dispatch($_SERVER['REQUEST_URI']);
    }


}catch (Exception $e){
    dd($e->getMessage());
}
