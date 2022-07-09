<?php

function redirect(string $path = '')
{
    header('Location: ' . SITE_URL . '/' . $path);
    exit;
}

function url($url = "") : string{
    return SITE_URL . '/'. $url;
}