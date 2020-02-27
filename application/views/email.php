<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emailed By company</title>
    <style>
        .container{
            padding:60px;
           
        }

        h1{
            color: #3d376d;
        }

        p, h5, .foote{
            font-family:'Times New Roman', Times, serif;
            /* line-height: 1.5px; */
            word-spacing: 1.5erm;
            font-size: large;
            align-items:center;
            color:rgb(66, 66, 94);
            justify-self:center;
            justify-content: center;
        }
        a{
            text-decoration: none; 
            color:rgb(180, 89, 29);
        }

        .foote{
            float: right; 
            color:rgb(66, 66, 94);

        }
    </style>
</head>
<body>

<div class="container">
    <h1>Vintage Job Portal</h1>
    <h5>Dear Mr./Mrs. Yonatan</h5>
    <p>This email reached you because you have tried to sign up into <em>https://yoniabera.000webhostapp.com/BreakPro/index.php/customer.</em> Therefore we urge you to verify that it was you, by clicking the link  <a href="<?php echo base_url();?>signup/verify_email?username=<?php echo $username;?> & token=<?php echo $token;?>">
       <em>Verify account.</em> </a>
    If this wasn't you, just leave as if this email wasn't sent.
    </p>

    <div class="foote">
        From Vintage Technologies, Job Portal
    </div>
  
</div>
    
</body>
</html>