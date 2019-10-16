<?php if(isset($errors) && count($errors) != 0):   ?>
    <div class="row">
        <div class="col-md-8 m-auto">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        <?php  foreach($errors as $error): ?>
        
            <strong><?= $error?></strong><br>
            
        <?php endforeach;  ?>
        </div>
        </div>
    </div>
<?php endif; ?>