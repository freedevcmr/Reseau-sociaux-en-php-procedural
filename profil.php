<?php
session_start();
$title = 'Profil';

require 'app/auth_filter.php';
require 'config/database.php';
require 'config/constant.php';
require 'app/function.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];

     $user = find_user_by_id($id);

     if(!$user){
        redirect('index.php');
     }

}else{
    redirect('profil.php?id='.get_session('user_id'));
    // redirect('profil.php?id='.$_SESSION['user_id']);
}

//si le formulaire est soumie
if(isset($_POST['update']))
{
  
    $errors=[]; 
    if(not_empty(['nom','city','twitter','country','sexe','github','biogra']) ){
        // if(!empty($nom) && !empty($pseudo) && !empty($email) && !empty($password) && !empty($passwordconfirm) ){
            extract($_POST);

            // var_dump([
            //     'nom'=>$nom,
            //     'city'=>$city,
            //     'twitter'=>$twitter,
            //     'country'=>$country,
            //     'sexe'=>$sexe,
            //     'github'=> $github,
            //     'bio' => $biogra,
            //     'boulot'=>!empty($boulot)?'1' :'0',
            //     'id'=>$_SESSION['user_id']
            // ]);
            // die();
            $q = $db->prepare('UPDATE users SET name= :nom, city = :city, twitter = :twitter ,
                                                country = :country,  github = :github,
                                                bio = :biogra,
                                                sexe= :sexe,
                                                available_for_hiring = :boulot
                                         WHERE id =:id');
                $q->execute([
                    'nom'=>$nom,
                    'city'=>$city,
                     'twitter'=>$twitter,
                    'country'=>$country,
                    'github'=> $github,
                    'biogra' => $biogra,
                    'sexe'=>$sexe,
                    'boulot'=>!empty($boulot)?'1' :'0',
                    
                    'id'=>$_SESSION['user_id']
                ]);



                set_flash('felicitation votre profil a été mis a Jour','info'); 

                redirect('profil.php?id='.$_SESSION['user_id']);

    }else{
        save_input_data();
        $errors[] =" Tous les champs marqués d'une * sont obligatoire";
    }

}else{
    clear_input_data();
}


require 'views/profil.view.php';






