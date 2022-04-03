<?php
use \App\Config\Session;
?>

<?php if (Session::getFlash('success')){ ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <?php echo Session::getFlash('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>

<?php } elseif(Session::getFlash('danger')){ ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <?php echo Session::getFlash('danger') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
<?php }?>

<!--<div class="alert alert-success alert-dismissible" role="alert">-->
<!--    ddd-->
<!--    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">-->
<!--    </button>-->
<!--</div>-->
