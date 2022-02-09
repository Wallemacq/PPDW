<?php
include 'models/users.php';

if(!empty($_SESSION['login'])){
    header("Location: ".ROOT_PATH);
    exit();
}
if(!empty($_POST)) {
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {
        $user = getUserByLogin($_POST['login']);
        if($user && password_verify($_POST['password'], $user['password'] )){
            //Authentification OK
            $_SESSION['login'] = $_POST['login'];
            header("Location: ".ROOT_PATH); # "Location: /exercice9/"
            exit();
        }
    }
}
include 'views/login.php';
?>