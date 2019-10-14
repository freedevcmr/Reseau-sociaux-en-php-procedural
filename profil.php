<?php
session_start();
$title = 'Profil';

require 'app/auth_filter.php';
require 'app/function.php';
require 'config/constant.php';


require 'views/profil.view.php';

