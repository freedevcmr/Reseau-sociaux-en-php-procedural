<?php 
session_start();
session_destroy();

// $_SESSION['locale'] = '';
header('Location: login.php');