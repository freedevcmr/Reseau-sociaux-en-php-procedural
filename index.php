<?php
session_start();
$title = 'Home';

require 'bootstrap/local.php';
require 'local/nav.php';
require 'app/function.php';
require 'config/constant.php';


require 'views/index.view.php';

