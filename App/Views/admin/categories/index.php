<?php Core\View::render('admin/layout/header'); ?>

<?php if (!empty($categories)){
    include_once VIEW_DIR . '/admin/categories/parts/categories_list.php';
}else{
    echo "No categories";
}
?>

<?php Core\View::render('admin/layout/footer'); ?>
