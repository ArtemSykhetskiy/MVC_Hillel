<?php Core\View::render('layout/header'); ?>

<!-- Latest Posts -->
<section class="latest-posts">
    <div class="container">
        <header>
            <h2>Latest from the blog</h2>
            <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </header>
        <div class="row">
            <?php foreach ($posts as $post):?>
                <?php $category = \App\Models\Categories::find($post->category_id); ?>
                <div class="post col-md-4">
                    <div class="post-thumbnail"><a href="<?= url("posts/{$post->id}") ?>"><img src="<?= IMG_URL . "{$post->image}" ?>" width="250px" class="img-fluid"></a></div>
                    <div class="post-details">
                        <div class="post-meta d-flex justify-content-between">
                            <div class="date"><?= $post->created_at?></div>
                            <div class="category"><a href="#"><?= $category->name  ?></a></div>
                        </div><a href="<?= url("posts/{$post->id}") ?>">
                            <h3 class="h4"><?= $post->title?></h3></a>
                        <p class="text-muted"><?= mb_substr($post->body, 0, 100) ?></p>
                    </div>
                </div>

            <?php endforeach;?>


        </div>
    </div>
</section>


<?php Core\View::render('layout/footer'); ?>
