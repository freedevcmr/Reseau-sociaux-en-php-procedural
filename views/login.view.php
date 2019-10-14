
<?php require 'partials/header.php'; ?>

<main role="main" class="container">
<h2>Connexion</h2>


<?php include 'partials/errors.php' ?>

<div class="row">
    <div class="col-md-6">
        <form class="card card-body bg-light" method="POST" action="" data-parsley-validate>
            
            <div class="form-group">
                <label for="inputIden">Pseudo ou Email</label>
                <input type="text" required class="form-control" data-parsley-trigger="change" id="inputIden" name="identifiant" value="<?=get_input_data('identifiant') ?>" aria-describedby="pseudoHlep" placeholder="Enter Pseudo">
                <small id="pseudoHlep" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
           
           
            <div class="form-group">
                <label for="inputpass">Mot de passe</label>
                <input type="password" required class="form-control" data-parsley-trigger="change" id="inputpass" name="password" placeholder="Entrer votre mot de passe">
            </div>
            
         
            <button type="submit" name="login" class="btn btn-primary">Connexion</button>
        </form>
    </div>

</div>

</main>



<?php require 'partials/footer.php'; ?>