 
<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>
<?php loadPartial('second-top') ?>


     <section id="form-container">
        <?php if(isset($errors)) : ?>
            <?php foreach ($errors as  $error) : ?>
                <div class="error-message"><?= $error ?></div>
             <?php endforeach ; ?>
        <?php endif ; ?>
        <form method="POST" action="/blog">
            <input name="title" value="<?= $post['title'] ?? '' ?>" type="text" placeholder="Title ...">
            <input name="category" value="<?= $post['category'] ?? '' ?>" type="text" placeholder="Category ...">
            <textarea name="body" value="<?= $post['body'] ?? '' ?>" placeholder="Write your post here ..."></textarea>
            <button type="submit">Submit</button>
        </form>

     </section>

     <?php loadPartial('footer') ?>