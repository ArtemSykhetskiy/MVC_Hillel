<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= !empty($pageTitle) ? $pageTitle : 'Home' ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= ASSET_URL . '/vendor/bootstrap/css/bootstrap.min.css'?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?= ASSET_URL . '/vendor/font-awesome/css/font-awesome.min.css'?>">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="<?= ASSET_URL . '/css/fontastic.css'?>">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href="<?= ASSET_URL . '/vendor/@fancyapps/fancybox/jquery.fancybox.min.css'?>">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= ASSET_URL . '/css/style.default.css'?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= ASSET_URL . '/css/custom.css'?>">
    <!-- Favicon-->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<header class="header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="search-area">
            <div class="search-area-inner d-flex align-items-center justify-content-center">
                <div class="close-btn"><i class="icon-close"></i></div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <form action="#">
                            <div class="form-group">
                                <input type="search" name="search" id="search" placeholder="What are you looking for?">
                                <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
                <!-- Navbar Brand --><a href="<?= SITE_URL ?>" class="navbar-brand">MVC Blog</a>
                <!-- Toggle Button-->
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?= SITE_URL ?>" class="nav-link active ">Home</a></li>
                    <li class="nav-item"><a href="<?= SITE_URL . '/posts' ?>" class="nav-link ">Blog</a></li>
                   <?php if(!\App\Helpers\SessionHelper::isUserLoggedIn()): ?><li class="nav-item"><a href="<?= SITE_URL . '/login' ?>" class="nav-link ">Log in</a> </li><?php endif;?>

                    <?php if(!\App\Helpers\SessionHelper::isUserLoggedIn()): ?><li class="nav-item"><a href="<?= SITE_URL . '/registration'?>" class="nav-link ">Registration</a></li><?php endif;?>

                    <?php if(\App\Helpers\SessionHelper::isUserLoggedIn()): ?> <li class="nav-item"><a href="<?= SITE_URL . '/logout'?>" class="nav-link ">Logout</a>  </li><?php endif;?>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Hero Section-->
