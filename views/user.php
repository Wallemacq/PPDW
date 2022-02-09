<?php ob_start() ?>
<br>
Identifiant: <?= $user['id']?>
<br>
Login: <?= $user['login']?>
<?php
$title = $user['login'];
$content = ob_get_clean();
include '../template.php';
?>