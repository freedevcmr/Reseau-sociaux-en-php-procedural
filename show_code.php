<?php
session_start();
require 'app/auth_filter.php';
$title = 'show code';
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
        if($success )
        {
            $data = $q->fetch(PDO::FETCH_OBJ);
          
            if(!$data)
            {
                redirect('share.php');
            }
        }


    }else{
        redirect('share.php');
    }


require 'views/show_code.view.php';





