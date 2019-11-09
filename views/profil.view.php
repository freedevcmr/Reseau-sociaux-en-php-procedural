
<?php require 'partials/header.php'; ?>

<main role="main" class="container">
<?php include 'partials/errors.php' ?>

<h1>page de profil</h1> 

<div class="row">
    
    <div class="col-md-6">

        <div class="card">
            <div class="card-header h4"><strong>Profil  de <?= $user->pseudo ?></strong> </div>
            <div class="card-body">Content
       

        <div class="row"><!--debut de la ligne  -->
            <div class="col-md-5">
                <img src="<?= get_avatar($user->email,100) ?>" alt="image de profil de <?= e($user->pseudo) ?>" class="rounded" >

            </div>

           
        </div><!--fin de la ligne  -->


        <div class="row"> <!--debut de la ligne  -->
            <div class="col-md-6">
                <strong><?= e($user->pseudo) ?></strong><br>
               <a href="mailto:<?= e($user->email) ?>"><strong><?= e($user->email) ?></strong></a> <br>
               <?= $user->city && $user->country ?  e($user->city.' - '.$user->country) :''?><br>
                
                    <a href="https://www.google.com/maps?q=<?=  e($user->city.' - '.$user->country)?>" target="_blank">Voir sur google Maps</a>
            </div>

            <div class="col-md-6">
                <?= !empty($user->twitter)?  '<a href="//twitter.com/"'.$user->twitter.'>@'.e($user->twitter).'</a>'
                :''?><br>
                <?= !empty($user->github)?  '<a href="//github.com/"'.$user->github.'>'.e($user->github).'</a>'
                :''?><br>
                <?= !empty($user->available_for_hiring)? 'Disponible pour emploi'
                                                            :'Non disponible pour emploi'?><br>
            
            </div>
        </div><!--fin de la ligne  -->

        
              
            </div>
            
        </div>


        <div class="row"><!--debut de la ligne pour la biogra -->
            <div class="col-md-12">
                
                <h5 class="card-header">Petite Biographie de <?= e($user->name) ?></h5>

                <p>
                    <?= $user->bio? nl2br(e($user->bio)) :'Aucune biographie pour le moment' ?>
                </p>
            </div>

        </div>

    </div> <!-- fin de la colone-->
<!-- la partie competer mon profil-->
    <h1>je suis la pratie completer mon profil</h1>

</div>

</main>



<?php require 'partials/footer.php'; ?>