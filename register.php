<?php
session_start();
$title = 'Register';
require 'config/constant.php';
require 'config/database.php';
require 'app/function.php';

if(isset($_POST['register']))
{
    $errors=[]; 
    if(not_empty(['nom','email','password','passwordconfirm']) ){
        // if(!empty($nom) && !empty($pseudo) && !empty($email) && !empty($password) && !empty($passwordconfirm) ){
            extract($_POST);

    
        //validation du pseudo

        if(mb_strlen($pseudo) < 4){
            $errors[] = "Votre pseudo tres court minimum 4 caractères !";
        }
    
        //validation de l'email
        if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
            $errors[] = "Adress email invalide";
        }

        //validation du mot de passe
        if(mb_strlen($password) < 6){
            $errors[] = "votre mots de passe est tres court minimun 6 caractères";
        }else{
            if($password !== $passwordconfirm){
                $errors[] = " Les deux mots de passes sont differents";
            }
        }

        //verification de l'unicité de l'email 

        if(is_already_in_use('email',$email,'users')){
            $errors[] = " votre email est deja utilisé";

        }

        //verification de l'unicité de pseudo
        if(is_already_in_use('pseudo',$pseudo,'users')){
            $errors[] = " votre pseudo est deja utilisé";
        }


        if(count($errors) == 0){
            //on enregistre l'utilisateur 
            //une message de bienvenue

            $to = $email;
            $subject= WEB_SITE_NAME .' - ACTIVATION DE COMPTE';
            $token = sha1($pseudo.$email.$password) ;


            ob_start();
            require('template/email/activation.tmpl.php');

            $content = ob_get_clean();

            $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();


            mail($to, $subject,$content,$headers);

            set_flash("un mail d'activation de compte vous a été envoyer","success" );
        
           
            redirect('index.php');

        }

    }else{

        $errors[] = "Veuillez remplir s'il vous plait tous champs !";



    }

}


require 'views/register.view.php';

