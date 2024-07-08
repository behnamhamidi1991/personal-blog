 
<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>
<?php loadPartial('second-top') ?>


     <section id="form-container">
        <form method="POST" action="/blog">
            <input name="title" type="text" placeholder="Title ...">
            <input name="category" type="text" placeholder="Category ...">
            <textarea name="body" placeholder="Write your post here ..."></textarea>
            <button type="submit">Submit</button>
        </form>
     </section>

     <?php loadPartial('footer') ?>