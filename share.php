<?php
session_start();
require 'app/auth_filter.php';
$title = 'share code';
require 'config/constant.php';
require 'config/database.php';
require 'app/function.php';

if(isset($_POST['save']))
{
    if(not_empty(['code']))
    {
        extract($_POST);

        $q = $db->prepare('INSERT INTO codes(code) VALUES(?)');

        $success =$q->execute([$code]);

        if($success )
        {
            $id = $db->lastInsertId();
            redirect('show_code.php?id='.$id);
        }else{
            set_flash("Erreurs lors de l'ajout du code source, veuillez ressayer","danger");
            redirect('share.php');
        }


    }else{
        redirect('share.php');
    }
}


require 'views/share.view.php';





