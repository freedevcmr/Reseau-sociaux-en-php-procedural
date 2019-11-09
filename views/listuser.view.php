<?php require 'partials/header.php'; ?>
<div class="container">
    <h1>liste des ustilisateurs</h1>
    <?php foreach($users as $user): ?>
        <div class="carduser-block">
            <a href="profil.php?id=<?= $user->id ?>">
                 <img src="<?= get_avatar($user->email,100) ?>" alt="image de profil de <?= e($user->pseudo) ?>" class="rounded-circle" >
            </a>
            
            <span class="h4">
                <a href="profil.php?id=<?= $user->id ?>">
                    <?= e($user->pseudo) ?>
                </a>
            </span>
        </div>

     <?php endforeach ?>
</div>



<?php require 'partials/footer.php'; ?>