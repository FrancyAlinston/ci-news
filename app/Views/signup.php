<?php
// defined('BASEPATH') or exit('No direct script access allowed');
include '_header.php';
?>
<div class="container">
    <div class="row justify-content-sm-center">
        <div class="col-5">
            <h2>Register User</h2>
            <?php if (isset($validation)) : ?>
            <div class="alert alert-warning">
                    <?= $validation->listErrors() ?>
            </div>
            <?php endif; ?>
            <form action="<?php echo base_url(); ?>/SignupController/store" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="b1 btn btn-dark">Signup</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<?php include '_footer.php';
