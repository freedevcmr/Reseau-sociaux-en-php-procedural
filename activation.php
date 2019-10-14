<?php
session_start();
require 'app/guest_filter.php';
require 'config/database.php';
require 'app/function.php';

// var_dump($_GET,$_GET['user'],$_GET['token']);
// die();
if(!empty($_GET['user']) && is_already_in_use('pseudo',$_GET['user'],'users') && !empty($_GET['token']) ){

    $pseudo = $_GET['user'];
    $token = $_GET['token'];

    $q = $db->prepare('SELECT email, password FROM users WHERE pseudo=?');

    $q->execute([$pseudo]);

    // var_dump($q->rowCount());
    $data = $q->fetch(PDO::FETCH_OBJ);
    // var_dump($data);

    $token_verif= sha1($pseudo.$data->email.$data->password);

    if($token == $token_verif)
    {
        ///alors on active son compte
        $q = $db->prepare('UPDATE users SET active = "1" WHERE pseudo=?');

    $q->execute([$pseudo]);
    set_flash("felicitation votre compte est maintenant activer", "success");
    redirect('login.php');
    }else{
        set_flash("paramètre d'activation de compte invalide", "danger");
        redirect('index.php');
    }
    // die();
    // die($data->email);

}else{
    redirect('index.php');
}

