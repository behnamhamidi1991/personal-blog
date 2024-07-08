
<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>
<?php loadPartial('second-top') ?>


<section id="blog">

        <div class="blog-content">
            <div class="blog-box">
                <form method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button>Delete</button>
                </form>
                <h2><?= $post->title ?></h2>
                <p><?= $post->body ?></p>
            </div>
        </div>
    </section>



<?php loadPartial('footer') ?>