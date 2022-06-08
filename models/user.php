<?php
function getDB() {
    //PDO: PHP Data Objects
    $bdd = new PDO("mysql:host=localhost;dbname=yankeecandle;charset=utf8", 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

function getUserByLogin($login){
    $reponse = getDB()->prepare('SELECT * FROM user WHERE login = :login');
    $reponse->execute([':login' => $login]);
    $user = $reponse->fetch();
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $user;
}

function getUserById($id) {
    $reponse = getDB()->prepare('SELECT * FROM user WHERE id = :id');
    $reponse->execute([':id' => $id]);
    $user = $reponse->fetch();
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $user;
}

function getUsers(){
    $reponse = getDB()->prepare('SELECT * FROM user');
    $reponse->execute();
    $users = $reponse->fetchAll();
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $users;
}

function addUser($login, $password) {
    $reponse = getDB()->prepare('INSERT INTO user (login, password) VALUES (:login, :password)');
    $password = password_hash($password, PASSWORD_DEFAULT);
    $reponse->execute([':password' => $password, ':login' => $login]);
    $reponse->closeCursor(); // Termine le traitement de la requête
}

function setUser($id, $login, $password) {
    //C'est ici qu'on va faire l'update de l'utilisateur.
    $reponse = getDB()->prepare('UPDATE user SET login = :login, password = :password WHERE id = :id');
    if($password){
        $password = password_hash($password, PASSWORD_DEFAULT);
    }
    else {
        $user = getUserById($id);
        $password = $user['password'];
    }
    $reponse->execute([':id' => $id, ':password' => $password, ':login' => $login]);
    $reponse->closeCursor(); // Termine le traitement de la requête
}

function deleteUserByLogin($login) {
    $reponse = getDB()->prepare('DELETE FROM user WHERE login = :login');
    $reponse->execute([':login' => $login]);
    $reponse->closeCursor(); // Termine le traitement de la requête
}
?>