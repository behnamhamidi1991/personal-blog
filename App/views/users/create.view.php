 
<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>


     <section id="form-container">
        <?= loadPartial('errors', [
            'errors' => $errors ?? []
        ]) ?>
        <form method="POST" action="/auth/register">
            <input name="name" value="<?= $user['name'] ?? '' ?>"  type="text" placeholder="Name">
            <input name="email" value="<?= $user['email'] ?? '' ?>"  type="email" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <input name="password_confirmation"  type="password" placeholder="Confirm Password">
                
               
            <button type="submit">Register</button>
        </form>

     </section>

     <?php loadPartial('footer') ?>