<div class="bg-light" data-stellar-background-ratio="0.5" >
    <div class="overlay"></div>
    <div class="container container-padding" >
        <div class="row jumbotron no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-4" style="color: black" >
                <?php echo validation_errors(); ?>

                <?php if(!empty($errors)) {
                    echo $errors;
                } ?>
                <form id="resetPasswordForm" action="<?php echo base_url('resetPassword/reset_Password');?>" method="post">
                    <div class="form-group" >
                        <label for="newpassword">New Password</label>
                        <input name="newpassword" type="password" class="form-control" id="newpassword" placeholder="new password">
                    </div>
                    <div class="form-group" >
                        <label for="confirmpassword">Confirm Password</label>
                        <input name="confirmpassword" type="password" class="form-control" id="confirmpassword" placeholder="confirm password">
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">
                        <button class="btn btn-success " style="padding: 12px 85px; " type="submit" "><span><b>confirm</b></span></button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>