
<?php require 'partials/header.php'; ?>

<main role="main" class="container-fluid">
<h2>Partager le codes </h2>


<?php include 'partials/errors.php' ?>

<div class="row">
    <div class="col-md-12">
        <form class="card card-body bg-light" method="POST" action="" data-parsley-validate>
            
           
           
        <div class="form-group">
        <label for="content_code">Entrer le code source a partager</label>
        <textarea class="form-control code-bg" name="code" id="content_code" rows="10"></textarea>
        </div>

            <div class="btn-group">
                
                <button type="submit" name="share" class="btn btn-success">enregister</button>
                <a href="#" class="btn btn-danger">Tout effacer</a>
            </div>
        </form>
    </div>

</div>

</main>



<?php require 'partials/footer.php'; ?>