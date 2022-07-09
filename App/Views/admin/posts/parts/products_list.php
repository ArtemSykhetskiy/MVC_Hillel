<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Posts</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                <tr class="text-dark">
                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
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
<!-- Recent Sales End -->