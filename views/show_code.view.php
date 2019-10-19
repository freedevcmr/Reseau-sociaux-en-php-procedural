
<?php require 'partials/header.php'; ?>

<main role="main" class="container-fluid">
<h2>Affichage du code source </h2>


<?php include 'partials/errors.php' ?>

<div class="row">
    <div class="col-md-12">
        <div class="btn-group ">  
            <a href="share.php?id=<?= $_GET['id'] ?>"  class="btn btn-warning">Cloner</a> 
            <a href="share.php" class="btn btn-info">Nouveau</a>
        </div>

        <div class="form-group">
            <label for="content_code">Entrer le code source a partager</label>
            <textarea class="form-control code-bg" id="code" name="code" id="content_code" rows="10"><?= $data->code ?></textarea>
        </div>

       
           
       
    </div>

</div>

</main>



<script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js" ></script>
  
    
    <script src="assets/js/main.js" ></script>
   

</body>
</html>
