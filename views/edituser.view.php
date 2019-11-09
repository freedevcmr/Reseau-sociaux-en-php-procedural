<?php require 'partials/header.php'; ?>

<main role="main" class="container">
<?php include 'partials/errors.php' ?>


    <div class="row">
    <?php if(!empty($_GET['id']) && $_GET['id'] == $_SESSION['user_id'] ): ?>
        <div class="col-md-6 m-auto">
            
            <div class="card ">
                <div class="card-header h4"><strong>Completer mon profil</strong></div>
                <div class="card-body bg-dark">

                <form action="" method="POST" data-parsley-validate class="card card-body bg-light" >

                    <div class="row"> <!-- debut de la ligne  -->
                        <div class="col-md-6"><!-- debut de la  premiere colone  -->

                            <div class="form-group">
                                <label for="inputName">Nom</label>
                                <input type="text" data-parsley-trigger="change" class="form-control" required name="nom" value="<?= !empty(get_input_data('nom'))?get_input_data('nom'):$user->name ?>" id="inputName"  placeholder="Enter Nom">
                                
                            </div>

                            <div class="form-group">
                                <label for="inputCity">ville</label>
                                <input type="text" data-parsley-trigger="change" class="form-control" required name="city" value="<?= !empty(get_input_data('city'))? get_input_data('city'): $user->city?>" id="inputcity"  placeholder="Enter ville">
                                
                            </div>

                            <div class="form-group">
                                <label for="inputTwitter">twitter</label>
                                <input type="text" data-parsley-trigger="change" class="form-control" required name="twitter" value="<?= !empty(get_input_data('twitter'))? get_input_data('twitter') : $user->twitter ?>" id="inputTwitter" >
                                
                            </div>

                        </div><!-- fin de la premiere colone  -->



                        <div class="col-md-6"><!-- debut de la deuxième colone -->
                            <div class="form-group">
                                <label for="inputCountry">Pays</label>
                                <input type="text" data-parsley-trigger="change" class="form-control" required name="country" value="<?= !empty(get_input_data('country'))? get_input_data('country'):$user->country ?>"  placeholder="Enter votre pays">
                            
                            </div>
                            <div class="form-group">
                                <label for="inputsexe">Sexe</label>
                                <select name="sexe" id="inputsexe" class="form-control" required name="country">
                                    <option value="H" <?= $user->sexe =="H"? "selected": null ?>>Homme</option>
                                    <option value="F" <?= $user->sexe =="F"? "selected": null ?> >Femme</option>
                                </select>
                        
                            </div>
                            <div class="form-group">
                                <label for="inputgit">Github</label>
                                <input type="text" data-parsley-trigger="change" class="form-control" required name="github" value="<?= !empty(get_input_data('github'))? get_input_data('github') : $user->github ?>" id="inputgit"  >
                                
                            </div>
                        </div><!-- fin de la deuxième colone -->

                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="inputboulot">
                                    <input type="checkbox" <?= $user->available_for_hiring?"checked":null ?> name="boulot" id="inputboulot" >
                                    Disponible pour emploi?</label>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Biographie</label>
                                <textarea class="form-control rounded-0" name="biogra" id="exampleFormControlTextarea1" rows="10"> <?= !empty(get_input_data('biogra'))?get_input_data('biogra'):e($user->bio) ?></textarea>
                            </div>


                        </div>

                    </div><!-- fin de la ligne  -->
                    <input type="submit" value="Mettre à jour" name="update" class="btn btn-primary"/>
                </form>

                </div>
            </div>
        </div>
<?php endif ?>
    </div>
</main>


<?php require 'partials/footer.php'; ?>