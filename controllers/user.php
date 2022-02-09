<?php
include 'models/users.php';
if(empty($_SESSION['login'])){
    header("Location: ".ROOT_PATH);
    exit();
}
if(REQ_TYPE_ID){
    if(REQ_ACTION == 'edit'){
        if(!empty($_POST)) {
            if(!empty($_POST['login']))
            {
                $user = getUserByLogin(REQ_TYPE_ID);
                if($_POST['password'] == $_POST['confirm_password']) {
                    setUser($user['id'], $_POST['login'], $_POST['password']);
                    header("Location: ".ROOT_PATH."users");
                    exit();
                }
                else {
                    $errorMessage = "Votre mot de passe ne correspond pas au mot de passe de confirmation";
                }
            }
            else {
                $errorMessage = "Il faut encoder quelque chose dans le champ login";
            }
        }
        $user = getUserByLogin(REQ_TYPE_ID);
        include 'views/user_edit.php';
        exit();
    }
    else if (REQ_ACTION == 'delete') {
        deleteUserByLogin(REQ_TYPE_ID);
        header("Location: ".ROOT_PATH."users");
        exit();
    }
    else {
        $user = getUserByLogin(REQ_TYPE_ID);
        if($user){
            include 'views/user.php';
            exit();
        }
        else {
            http_response_code(404);
            include 'views/404.php';
            exit();
        }
    }
}
else {
    $users = getUsers();
    include 'views/users.php';
    exit();
}
?>