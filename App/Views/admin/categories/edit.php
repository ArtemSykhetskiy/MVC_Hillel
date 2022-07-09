<?php Core\View::render('admin/layout/header'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit category</h6>
            <form action="<?= url("admin/categories/{$category->id}/update");?>" method="POST" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" value="<?= $category->name?>" id="floatingInput" name="name" placeholder="Title"">
                <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Description" name="description" id="floatingTextarea" style="height: 150px;"><?= $category->description?></textarea>
                <label for="floatingTextarea">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" id="floatingInput" name="image" placeholder="Title">
                <label for="floatingInput">Image</label>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Update</button>
                <?php if(!empty($data['errors'])):?>
                    <div class="alert alert-danger"><?php foreach ($data['errors'] as $error){echo "{$error}" . '<br>'; } ?></div>
                <?php endif;?>
            </form>
        </div>
</div>
</div>

<?php Core\View::render('admin/layout/footer'); ?>
