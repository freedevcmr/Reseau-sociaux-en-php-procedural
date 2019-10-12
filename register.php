<?php
$title = 'Register';
require 'config/constant.php';

if(isset($_POST['register']))
{
    extract($_POST);
    if(!empty($nom) && !empty($pseudo) && !empty($email) && !empty($password) && !empty($passwordconfirm) ){
        
    }
}


require 'views/register.view.php';

