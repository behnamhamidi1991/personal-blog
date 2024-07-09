<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>
<?php loadPartial('second-top') ?>

     <section id="form-container">
        <h2>Edit Blog Post</h2>
        <?php if(isset($errors)) : ?>
            <?php foreach ($errors as  $error) : ?>
                <div class="error-message"><?= $error ?></div>
             <?php endforeach ; ?>
        <?php endif ; ?>
        <form method="POST" action="/blog/<?= $post->id ?>">
            <input type="hidden" name="_method" value="PUT">
            <input name="title" value="<?= $post->title ?? "" ?>" type="text" placeholder="Title ...">
                
            <input name="category" value="<?= $post->category ?? "" ?>" type="text" placeholder="Category ...">
               
            <textarea name="body" placeholder="Write your post here ..."><?= trim($post->body ?? "") ?></textarea>
            <button type="submit">Submit</button>
        </form>

     </section>

     <?php loadPartial('footer') ?>