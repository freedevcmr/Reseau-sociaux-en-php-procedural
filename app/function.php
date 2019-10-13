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



