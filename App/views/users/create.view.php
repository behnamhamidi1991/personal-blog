 
<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>


     <section id="form-container">
        <?php if(isset($errors)) : ?>
            <?php foreach ($errors as  $error) : ?>
                <div class="error-message"><?= $error ?></div>
             <?php endforeach ; ?>
        <?php endif ; ?>
        <form method="POST" action="/auth/register">
            <input name="name"  type="text" placeholder="Name">
            <input name="email"  type="email" placeholder="Email">
            <input name="password"  type="password" placeholder="Password">
            <input name="password_confirmation"  type="password" placeholder="Confirm Password">
                
               
            <button type="submit">Register</button>
        </form>

     </section>

     <?php loadPartial('footer') ?>