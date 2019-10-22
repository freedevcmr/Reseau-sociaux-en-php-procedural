<?php 
    $langue = ['fr','en'];
if(!empty($_GET['lang']) && in_array($_GET['lang'], $langue) )
{
    // die('bon');

    $_SESSION['locale'] =$_GET['lang'];



}else{
    //on choissi la premiere langue comme langue par defaut
    if(!isset($_SESSION['locale'])|| empty($_SESSION[$_SESSION['locale']]))
    {

        $_SESSION['locale'] =$langue[0];
    }
} 
