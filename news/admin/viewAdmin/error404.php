<!-- Заголовок title -->
<?php ob_start() ?>
<h2>Админ панель</h2>
<article>
<p>Error </p>




</article>
<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php";