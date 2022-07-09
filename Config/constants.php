<?php

define('SERVER_PORT', (!empty($_SERVER['SERVER_PORT']) ? ':' . $_SERVER['SERVER_PORT'] : ''));
define('SITE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . SERVER_PORT);
const ASSET_URL = SITE_URL . '/assets';
const IMG_URL = ASSET_URL . '/images';
const ADMIN_ASSET_URL = SITE_URL . '/admin';

define('BASE_URL', dirname(__DIR__));
define('APP_DIR', dirname(__DIR__) . '/App');
const VIEW_DIR = APP_DIR . '/Views/';
const IMG_DIR = BASE_URL . '/public/assets/images';
const CATEGORIES_DIR = IMG_DIR . '/categories';
const POSTS_DIR = IMG_DIR . '/posts';
