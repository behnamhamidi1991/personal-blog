 
<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>


     <section id="form-container">
        <?php if(isset($errors)) : ?>
            <?php foreach ($errors as  $error) : ?>
                <div class="error-message"><?= $error ?></div>
             <?php endforeach ; ?>
        <?php endif ; ?>
        <form method="POST" action="/auth/login">
            <input name="email"  type="text" placeholder="Email">
                
            <input name="password"  type="password" placeholder="Password">
               
            <button type="submit">Login</button>
        </form>

     </section>

     <?php loadPartial('footer') ?>