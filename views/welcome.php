<?php ob_start() ?>
<?php if(empty($_SESSION['login'])):?>
    <a href="<?=ROOT_PATH?>login" class="btn btn-outline-success my-2 my-sm-0">Se connecter</a>
<?php else:?>
    Salut <?=$_SESSION['login']?>
    <br>
    <a href="<?=ROOT_PATH?>logout" class="btn btn-outline-success my-2 my-sm-0">Se déconnecter</a>
    <a href="<?=ROOT_PATH?>users" class="btn btn-outline-secondary my-2 my-sm-0">Lister les utilisateurs</a>
<?php endif?>
<?php
$title = 'Exercice 9';
$content = ob_get_clean();
include('../template.php');