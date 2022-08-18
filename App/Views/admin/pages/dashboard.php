<?php Core\View::render('admin/layout/header'); ?>

<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total users</p>
                    <h6 class="mb-0"><?= $qnty['qntyUsers']['COUNT(id)'] ?></h6>

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Posts</p>
                    <h6 class="mb-0"><?= $qnty['qntyPosts']['COUNT(id)'] ?></h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total categories</p>
                    <h6 class="mb-0"><?= $qnty['qntyCats']['COUNT(id)'] ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->






<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Posts</h6>
            <a href="<?= SITE_URL . '/admin/posts'?>">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                <tr class="text-dark">
                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Actions</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $post):?>

                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td><?= $post->id ?></td>
                        <td><?= $post->title ?></td>
                        <td><?= $post->created_at ?></td>

                        <td><a class="btn btn-sm btn-primary" href="<?= url("admin/posts/{$post->id}/edit")?>">Edit</a></td>
                        <td><form action="<?= url("admin/posts/{$post->id}/destroy")?>" method="post">
                                <button class="btn btn-danger">Remove</button></form> </td>
                    </tr>

                <?php endforeach;?>



                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Categories</h6>
            <a href="<?= SITE_URL . '/admin/categories'?>">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                <tr class="text-dark">
                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($categories as $category):?>

                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td><?= $category->id ?></td>
                        <td><?= $category->name ?></td>
                        <td><?= $category->description ?></td>
                        <td><img src="<?= IMG_URL . $category->image ?>" width="100px"></td>

                        <td><a class="btn btn-sm btn-primary" href="<?= url("admin/categories/{$category->id}/edit")?>">Edit</a></td>
                        <td><form action="<?= url("admin/categories/{$category->id}/destroy")?>" method="post">
                                <button class="btn btn-danger">Remove</button></form> </td>
                    </tr>

                <?php endforeach;?>



                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->




<?php Core\View::render('admin/layout/footer'); ?>
