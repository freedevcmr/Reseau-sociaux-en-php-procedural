<?php 

//connexion à base de donné
define('DB_DRIVER' ,"mysql") ;
define('DB_HOST','localhost') ;
define('DB_NAME','reseau');
define('DB_USER','root');
define('DB_PASS','');


try{

    
    $db = new PDO(DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);

    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->query('SELECT * FROM users');

}catch(PDOException $e){
    die("Echec ".$e->getMessage());
}