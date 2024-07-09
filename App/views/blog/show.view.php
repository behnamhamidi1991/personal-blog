
<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>
<?php loadPartial('second-top') ?>


<section id="blog">

        <div class="blog-content">
            <div class="blog-box">
                <div class="blog-btn-container">
                <form method="POST" id="deleteForm">
                    <input type="hidden" name="_method" value="DELETE">
                    <button id="delBtn">Delete</button>
                </form>
                <a href="/blog/edit/<?= $post->id ?>" class="editButton">Edit</a>
                </div>
                <h2><?= $post->title ?></h2>
                <p><?= $post->body ?></p>
            </div>
        </div>
    </section>



<?php loadPartial('footer') ?>