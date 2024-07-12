
<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>
<?php loadPartial('second-top') ?>


<section id="blog">
        <div class="blog-header">
            <h2>Blog</h2>
            <p>In our blog you can find anything you like to learn</p>
            <?= loadPartial('message') ?>
        </div>

        <div class="blog-content">

            <?php foreach($posts as $post) : ?>
            <div class="blog-box">
                <h2><?= $post->title ?></h2>
                <p><?= mb_substr($post->body, 0, 250) . ' ...' ?></p>
                <div class="post-details">
                    <span> <?= $post->created_at ?></span>
                    <span><?= $post->user_name ?></span>
                    <span><?= $post->category ?></span>

                </div>
                <a href="/blog/<?= $post->id ?>" class="blog-readmore-btn">Read More</a>
            </div>
            <?php endforeach ; ?>

        </div>
    </section>



<?php loadPartial('footer') ?>