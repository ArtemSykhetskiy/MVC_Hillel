<?php Core\View::render('admin/layout/header'); ?>

<?php if (!empty($posts)){
    include_once VIEW_DIR . '/admin/posts/parts/products_list.php';
}else{
    echo "No posts";
}
?>

<?php Core\View::render('admin/layout/footer'); ?>
