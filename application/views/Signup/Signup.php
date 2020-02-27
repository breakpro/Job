
<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url('assets/images/bg_2.jpg');?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center " data-scrollax-parent="true">
                <div class="col-sm-6 col-xs-12">
                    <div class="col-xl-10 ftco-animate  " data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mt-1" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-4" >
                            <div class="h1 align-center" style="color: #fff;"><b style="font-weight: 700;">Create Account<b></div>
                                <?php if($this->session->flashdata('registeration')){ echo $this->session->flashdata('registeration');}  ?>
                                <span id="success_message" class="text-success"></span>
                            <form method="post" action="<?php echo base_url()."signup/auth"?>" id="signup" >

                                <div class="form-group" >
                                    <label for="username">Email / Phone</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Johndoe@email.com / +2519********">
                                    <span  style="text-danger" id="username_error"></span>
                                </div>
                                <div class="form-group" >
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="********">
                                    <span class="text-danger"  id="password_error"></span>
                                </div>
                                <div class="form-group" >
                                    <label for="confirm-password">Confirm Password</label>
                                    <input type="password" class="form-control" name="cpassword" id="confirm-password" placeholder="********">
                                    <span class="text-danger"  id="cpassword_error"></span>
                                </div>
                                <div class="form-group row mr-2" style="float: right;" >
                                        <button class="btn btn-primary " id="contact" style="padding: 12px 85px; " type="submit"><span><b>Signup</b></span></button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->


<!-- <script>
$(document).ready(function(){

 $('#signup').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"<?php echo base_url(); ?>signup/auth",
   method:"POST",
   data:$(this).serialize(),
   dataType:"json",
   
   success:function(data)
   {
    if(data.error)
    {
     if(data.username_error != '')
     {
      $('#username_error').html(data.username_error);
     }
     else
     {
      $('#username_error').html('');
     }
     if(data.password_error != '')
     {
      $('#password_error').html(data.password_error);
     }
     else
     {
      $('#password_error').html('');
     }
     if(data.cpassword_error != '')
     {
      $('#cpassword_error').html(data.cpassword_error);
     }
     else
     {
      $('#cpassword_error').html('');
     }
    }
    if(data.success)
    {
     $('#success_message').html(data.success);
     $('#username_error').html('');
     $('#password_error').html('');
     $('#cpassword_error').html('');
     $('#contact_form')[0].reset();
    }
    $('#signup').attr('disabled', false);
   }
  
  })
 });

});
</script> -->


