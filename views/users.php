<?php ob_start() ?>
    <div class="card-deck">
    <?php foreach($users as $user):?>
        <div class="card text-center">
          <div class="card-header">
              <?=$user['id']?>
          </div>
          <div class="card-body">
              <p class="card-text"><?=$user['login']?></p>
              <a href="<?=ROOT_PATH.'users/'.$user['login']?>" class="btn btn-primary">Voir l'utilisateur</a>
              <a href="<?=ROOT_PATH.'users/'.$user['login'].'/edit'?>" class="btn btn-secondary">Editer l'utilisateur</a>
              <a href="<?=ROOT_PATH.'users/'.$user['login'].'/delete'?>" class="btn btn-danger">Supprimer l'utilisateur</a>
          </div>
        </div>
    <?php endforeach?>
    </div>
    <br>
    <a href="<?=ROOT_PATH?>signup" class="btn btn-outline-secondary my-2 my-sm-0">Créer un utilisateur</a>
<?php
$title="Les utilisateurs";
$content = ob_get_clean();
include '../template.php';
?>