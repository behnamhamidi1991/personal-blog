<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>
<?php loadPartial('second-top') ?>

<section class="error-404">
        <h1><?=  $status?></h1>
        <p><?= $message ?></p>
        <a href="/">Go Back To Homepage</a>
</section>


<?php loadPartial('footer') ?> 