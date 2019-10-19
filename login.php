<?php
session_start();
require 'app/guest_filter.php';
$title = 'Login';
require 'config/constant.php';
require 'config/database.php';
require 'app/function.php';

if(isset($_POST['login']))
{
    // die('ok')
    $errors=[]; 
    if(not_empty(['identifiant','password']) ){
        // if(!empty($nom) && !empty($pseudo) && !empty($email) && !empty($password) && !empty($passwordconfirm) ){
            extract($_POST);

            $q = $db->prepare('SELECT id,pseudo,email FROM users WHERE (pseudo = :indent || email = :indent) AND password = :password
                                AND active = "1" ');
                $q->execute([
                    'indent'=>$identifiant,
                    'password'=>sha1($password),
                ]);


                if($q->rowCount())
                {
                   $user= $q->fetch(PDO::FETCH_OBJ);

                    $_SESSION['user_id'] = $user->id;
                    $_SESSION['pseudo'] = $user->pseudo;
                    $_SESSION['email'] = $user->email;
                    // die($user->id);
                    // ,$user->pseudo

                    redirect('profil.php?id='.$user->id);
                }else{
                    set_flash('Combinaison Identifiant/Password incorrect','danger');

                    save_input_data();
                }
            //  var_dump($q->rowCount());
            //  die();      
        

    }

}else{
    clear_input_data();
}


require 'views/login.view.php';





