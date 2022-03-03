<?php
// defined('BASEPATH') or exit('No direct script access allowed');
include '_header.php';
?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <h2>Login in</h2>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="d-grid">
                    <button type="submit" class=" b1 btn btn-success">Signin</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include '_footer.php';
