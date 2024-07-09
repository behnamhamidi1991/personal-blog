<?php if(isset($_SESSION['success_message'])) : ?>
 <div class="success-message">
 <?= $_SESSION['success_message'] ?>
 </div>
<?php unset($_SESSION['success_message']); ?>
<?php endif ; ?>

<?php if(isset($_SESSION['error-message'])) : ?>
 <div class="error-message">
 <?= $_SESSION['success_message'] ?>
 </div>
<?php unset($_SESSION['success_message']); ?>
<?php endif ; ?>