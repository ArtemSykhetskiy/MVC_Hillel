<?php Core\View::render('layout/header'); ?>

<div class="container">
    <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-12">
            <div class="container">
                <div class="post-single">
                    <div class="post-thumbnail" style="text-align: center;"><img src="<?= IMG_URL . "{$post->image}"?>" class="img-fluid" width="250px"></div>
                    <div class="post-details">
                        <div class="post-meta d-flex justify-content-between">
                            <div class="category"><a href="#"><?=$category->name?></a></div>
                        </div>
                        <h1><?= $post->title ?><a href="#"></a></h1>
                        <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                                <div class="title"><span><?= $post->created_at ?></span></div></a>

                        </div>
                        <div class="post-body">
                            <p><?= $post->body ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </main>

    </div>
</div>

<?php Core\View::render('layout/footer'); ?>
