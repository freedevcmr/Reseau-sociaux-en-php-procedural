
<?php require 'partials/header.php'; ?>

<main role="main" class="container">
<h2>Inscrivez vous!!!!</h2>


<?php include 'partials/errors.php' ?>

<div class="row">
    <div class="col-md-6">
        <form class="card card-body bg-light" method="POST" action="" data-parsley-validate>
            <div class="form-group">
                <label for="inputName">Nom</label>
                <input type="text" data-parsley-trigger="change" class="form-control" required name="nom" value="<?=get_input_data('nom') ?>" id="inputName" aria-describedby="nameHelp" placeholder="Enter Nom">
                <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="inputPseudo">Pseudo</label>
                <input type="text" required class="form-control" data-parsley-trigger="change" id="inputPseudo" name="pseudo" value="<?=get_input_data('pseudo') ?>" aria-describedby="pseudoHlep" placeholder="Enter Pseudo">
                <small id="pseudoHlep" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" required class="form-control" data-parsley-trigger="change" id="inputEmail" name="email" value="<?=get_input_data('email') ?>" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
           
            <div class="form-group">
                <label for="inputpass">Mot de passe</label>
                <input type="password" required class="form-control" data-parsley-trigger="change" id="inputpass" name="password" placeholder="Entrer votre mot de passe">
            </div>
            <div class="form-group">
                <label for="inputpassconfirm">Confirmer votre mot de passe</label>
                <input type="password" required class="form-control" data-parsley-equalto="#inputpass" id="inputpassconfirm" name="passwordconfirm" placeholder="confirmer votre mot de passe">
            </div>
         
            <button type="submit" name="register" class="btn btn-primary">Inscription</button>
        </form>
    </div>

</div>

</main>



<?php require 'partials/footer.php'; ?>