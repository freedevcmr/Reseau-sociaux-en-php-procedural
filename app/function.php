<?php 
//cette function verifie que les champs sont remplies
if(!function_exists('not_empty'))
{
    function not_empty($fields = []){

        if(count($fields) != 0 ){
            foreach($fields as $field){

                if(empty($_POST[$field]) || trim($_POST[$field]) ==""){
                    return false;
                }
            }

            return true;
        }

    }
}

//cette function verfie l'unicité de pseudo, email, etc... 
if(!function_exists('is_already_in_use')){
    function is_already_in_use($field,$value, $table)
    {
        global $db;

        $q = $db->prepare("SELECT id FROM $table WHERE $field = ?");

        $q->execute([$value]);

        $found = $q->rowCount();

        $q->closeCursor();

        return $found;

    }
}



if(!function_exists('set_flash')){
    function set_flash($message, $type='info'){
        $_SESSION['notification']['message']= $message;
        $_SESSION['notification']['type'] = $type;
    }
}


if(!function_exists('redirect')){
    function redirect($page){

        header('location:'.$page);
        exit();

    }
}

//cette function permet de replir automentiquement le formulaire en car d'erreur de validation
if(!function_exists('save_input_data')){
    function save_input_data()
    {
        foreach($_POST as $key => $value)
        {

            
            if(strpos($key, 'password') === false)
            {
                $_SESSION['input'][$key] = $value;

            }

        }
    }
}

if(!function_exists('get_input_data')){
    function get_input_data( $key)
    {
        
       return  !empty($_SESSION['input'][$key])? e($_SESSION['input'][$key]) :null;
    }
}

//
if(!function_exists('clear_input_data')){

    function clear_input_data()
    {
        if(isset($_SESSION['input'])){

         $_SESSION['input'] = [] ;

        }
    }
}


if(!function_exists('e')){
    function e($string)
    {
        if($string)
        {
            return htmlspecialchars($string); 
        }
    }
}
// if(!function_exists('')){
//     function 
// }