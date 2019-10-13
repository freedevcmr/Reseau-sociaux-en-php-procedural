<?php 
if(!empty($_SESSION['notification']['message'])): ?>
<div class="container">
    <div class="alert  <?= 'alert-'.$_SESSION['notification']['type'] ?> alert-dismissible fade show" role="alert">
    
    <?= $_SESSION['notification']['message'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
</div>
<?php 
$_SESSION['notification']['message']="";

endif; 
