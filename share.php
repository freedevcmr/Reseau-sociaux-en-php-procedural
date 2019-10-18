<?php
session_start();
require 'app/auth_filter.php';
$title = 'share code';
require 'config/constant.php';
require 'config/database.php';
require 'app/function.php';



require 'views/share.view.php';





