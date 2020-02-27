
<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url('assets/images/bg_2.jpg');?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-4" >
                    <div class="h1 align-center" style="color: #fff;"><b style="font-weight: 700;">User login<b></div>
                    <?php echo validation_errors(); ?>

                    <?php if(!empty($errors)) {
                        echo $errors;
                    } ?>
                    <!-- forgot password Modal start -->

                    <div id="forgot_password" class="modal fade" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Please enter your phone Number</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url('resetPassword/UserNumber');?>" method="post" id="loginInfo">
                                        <input class="form-control" placeholder="+2519********" type="text" id="number" name="number">
                                         <button class="btn btn-secondary " type="button" id="submit" onclick="Phoneautentication();" data-target="confirm_password" style="margin-top: 8px;float: right;background-color: #2962ff">Send code</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="recaptcha-container"></div>

                    <!-- forgot password   modal end-->

                    <!-- confirm password Modal start -->
                    <div id="confirm_password" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Please enter the verification code</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="" id="loginInfo2">
                                        <input class="form-control" placeholder="******" type="text" id="verificationCode" name="number">
                                        <input class="btn btn-secondary " type="submit" form="loginInfo" id="submit" onclick="verifycode();" data-dismiss="modal" data-target="confirm_password" value="Confirm" style="margin-top: 8px;float: right;background-color: #2962ff">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="recaptcha-container"></div>

                    <!-- confirm password   modal end-->
                    <form id="LoginForm" action="<?php echo base_url('Login/login');?>" method="post">

                        <div class="form-group" >
                            <label for="Email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Someone@mail.com">
                        </div>
                        <div class="form-group" >
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="password">
                        </div>
                        <!-- <div class="form-group" style="text-align: right; ">
                            <a href="#"><b style="color: white; margin-right: 20px;">Forgot password</b></a>
                        </div> -->
                        <div class="form-group row" >
                            <div class="col-lg-8 col-md-6 col-xs-12 col-sm-12" style="text-align: float-left;">
                            <span>
                                <a href="#" data-toggle="modal" data-target="#forgot_password"><span style="color: white; margin-left: 20px;">Forgot password</span></a><br>
                                <a href="<?php echo base_url('Signup/')?>"><span style="color: white; margin-left: 20px;">New here? Create account</span></a>
                            </span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12" style="text-align: float-right;">
                                <button class="btn btn-primary " style="padding: 12px 85px; " type="submit"><span><b>Login</b></span></button>
                            </div>
                        </div>
                    </form>

        </div>
      </div>
    </div>
</div>