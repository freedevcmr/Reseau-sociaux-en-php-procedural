<?php
session_start();
$title = 'Home';

require 'bootstrap/local.php';
require 'local/nav.php';
require 'config/database.php';
require 'app/function.php';
require 'config/constant.php';

//on recupere la lite de tout les utilisateurs qui ont activé leur compte

$q = $db->query('SELECT id,pseudo, email FROM users WHERE active = "1" ORDER BY pseudo DESC');

$users = $q->fetchAll(PDO::FETCH_OBJ);
// var_dump($users);
// die();

require 'views/listuser.view.php';

