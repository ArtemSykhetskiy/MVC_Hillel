<?php

namespace App\Helpers;

class SessionHelper
{
    public static function isUserLoggedIn()
    {
        return !empty($_SESSION['user_data']);
    }

    public static function userId()
    {
        return $_SESSION['user_data']['id'];
    }

    public static function setUserData($id, $name,  ...$args)
    {
        $_SESSION['user_data'] = array_merge([
            'id' => $id,
            'name' => $name
        ], $args);
    }

    public static function getUserName(){
        return $_SESSION['user_data']['name'];
    }

    public static function destroy()
    {
        if(session_id()){
            session_destroy();
        }

    }
}