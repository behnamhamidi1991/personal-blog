<?php if (isset($errors)) : ?>
    <?php foreach ($errors as $error) : ?>
    <div class="error-message-box"><?= $error ?></div>
    <?php endforeach; ?>
  <?php endif; ?>