<?php require 'partials/header.php'; ?>
<div class="container">
    <h1>liste des ustilisateurs</h1>
    <div class="row">

    
    <?php foreach($users as $user): ?>
        <div class="col-6 col-sm-4 col-md-3 py-3 text-center">

       
            <div class="carduser-block ">
                <a href="profil.php?id=<?= $user->id ?>">
                    <img src="<?= get_avatar($user->email,100) ?>" alt="image de profil de <?= e($user->pseudo) ?>" class="rounded-circle" >
                </a>
                
                <span class="h4 d-block text-capitalize ">
                    <a href="profil.php?id=<?= $user->id ?>">
                        <?= e($user->pseudo) ?>
                    </a>
                </span>
            </div>
        </div>
     <?php endforeach ?>
     </div>
</div>



<?php require 'partials/footer.php'; ?>