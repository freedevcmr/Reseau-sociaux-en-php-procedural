
<?php require 'partials/header.php'; ?>

<main role="main" class="container">
<h2>Inscrivez vous!!!!</h2>


<?php include 'partials/errors.php' ?>

<div class="row">
    <div class="col-md-6">
        <form class="well" method="POST" action="">
            <div class="form-group">
                <label for="inputName">Nom</label>
                <input type="text" required class="form-control" name="nom" id="inputName" aria-describedby="nameHelp" placeholder="Enter Nom">
                <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="inputPseudo">Pseudo</label>
                <input type="text" required class="form-control" id="inputPseudo" name="pseudo" aria-describedby="pseudoHlep" placeholder="Enter Pseudo">
                <small id="pseudoHlep" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" required class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
           
            <div class="form-group">
                <label for="inputpass">Mot de passe</label>
                <input type="password" required class="form-control" id="inputpass" name="password" placeholder="Entrer votre mot de passe">
            </div>
            <div class="form-group">
                <label for="inputpassconfirm">Confirmer votre mot de passe</label>
                <input type="password" required class="form-control" id="inputpassconfirm" name="passwordconfirm" placeholder="confirmer votre mot de passe">
            </div>
         
            <button type="submit" name="register" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>

</main>



<?php require 'partials/footer.php'; ?>