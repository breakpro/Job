
<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url('assets/images/bg_2.jpg');?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-4" >
                    <div class="h1 align-center" style="color: #fff;"><b style="font-weight: 200;">User login<b></div>
                    <form action="<?php echo base_url('login/auth');?>">

                        <div class="form-group" >
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Someone@something.com">
                        </div>
                        <div class="form-group" >
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="password">
                        </div>
                        <div class="form-group" style="text-align: right; ">
                            <a href="#"><b style="color: white; margin-right: 20px;">Forgot password</b></a>
                        </div>
                        
                        <div class="form-group" style="text-align: center; ">
                            
                            <button class="btn btn-primary btn-lg" style="padding: 12px 85px; " type="submit"><span><b>Login</b></span></button>
                        </div>
                    </form>
                    
                </div>
            
        </div>
      </div>
    </div>