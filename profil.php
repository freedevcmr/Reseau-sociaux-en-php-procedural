<?php
session_start();
$title = 'Profil';

require 'app/auth_filter.php';
require 'config/database.php';
require 'config/constant.php';
require 'app/function.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];

     $user = find_user_by_id($id);

     if(!$user){
        redirect('index.php');
     }




}else{
    redirect('profil.php?id='.get_session('user_id'));
    // redirect('profil.php?id='.$_SESSION['user_id']);
}

require 'views/profil.view.php';






