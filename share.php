<?php
session_start();
require 'app/auth_filter.php';
$title = 'share code';
require 'config/constant.php';
require 'config/database.php';
require 'app/function.php';

if(!empty($_GET['id']))
{
    // extract($_POST);
    $id = $_GET['id'];

    $q = $db->prepare('SELECT code FROM codes WHERE id = ?');

    $success =$q->execute([$id]);

    // var_dump($success);
    // die(); 
  
        $data = $q->fetch(PDO::FETCH_OBJ);
        // var_dump($data);
        // die();
        if($data)
        {

            $code = $data->code;
           // redirect('share.php');
        }else{
            redirect('share.php');
        }
    
//    var_dump( $code);
//     die('bon pour data'); 

}else{
    $code ="";
    // die('mauvais pour data'); 
}




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





