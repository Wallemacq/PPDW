<?php
include 'models/users.php';
if(empty($_SESSION['login'])){
    header("Location: ".ROOT_PATH);
    exit();
}
if(!empty($_POST)) {
    if(!empty($_POST['login']) && !empty($_POST['password'] && !empty($_POST['confirm_password'])))
    {
        if(getUserByLogin($_POST['login'])){
            $errorMessage = "L'utilisateur existe déjà";
        }
        else if($_POST['password'] == $_POST['confirm_password']) {
            addUser($_POST['login'], $_POST['password']);
            header("Location: ".ROOT_PATH."users");
            exit();
        }
        else {
            $errorMessage = "Votre mot de passe ne correspond pas au mot de passe de confirmation";
        }
    }
}
include 'views/signup.php';
?>