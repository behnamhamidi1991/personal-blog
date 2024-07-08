
<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>
<?php loadPartial('second-top') ?>


<section id="blog">

        <div class="blog-content">
            <div class="blog-box">
                <button></button>
                <h2><?= $post->title ?></h2>
                <p><?= $post->body ?></p>
            </div>
        </div>
    </section>



<?php loadPartial('footer') ?>