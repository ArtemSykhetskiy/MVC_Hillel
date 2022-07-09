<?php Core\View::render('admin/layout/header'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit post</h6>
            <form action="<?= url("admin/posts/{$post->id}/update");?>" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Title" name="title" value="<?=$post->title?>">
                <label for="floatingInput">Title</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect"
                        aria-label="Floating label select example" name="category_id">
                    <?php foreach ($category as $singleCategory):?>
                    <option value="<?= $singleCategory->id?>" <?php if($singleCategory->id == $post->category_id) echo 'selected' ?>><?= $singleCategory->name?></option>
                  <?php endforeach;?>
                </select>
                <label for="floatingSelect">Category</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Content" id="floatingTextarea" style="height: 450px;" name="body"><?=$post->body?></textarea>
                <label for="floatingTextarea">Content</label>
            </div>
                <br>
                <div class="form-floating mb-3">
                    <input type="file" class="form-control" id="floatingInput" name="image" placeholder="Title">
                    <label for="floatingInput">Image</label>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <?php if(!empty($data['errors'])):?>
                    <div class="alert alert-danger"><?php foreach ($data['errors'] as $error){echo "{$error}" . '<br>'; } ?></div>
                <?php endif;?>
            </form>
        </div>
    </div>
</div>

<?php Core\View::render('admin/layout/footer'); ?>
