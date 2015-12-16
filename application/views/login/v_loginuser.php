<!-- /**********************************************************************************************************************
*FIle Name                       : v_login user.php
*Description                     : view : template for user login
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 17th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/ -->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login Form</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?=base_url()?>assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>-->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <!--   <![endif] -->
  </head>

  <body>
    
    <div class="container">
      <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-8 toppad" >
        <h2 class="text-center">Please Login</h2>

      <form class="form-signin" method="POST" action="<?= site_url('c_register/check_register'); ?>">
            <h1 class="form-signin-heading"></h1> 
        <div class="modal-header">
          <!-- <button type="button" class="close red" style="margin-right:7px;" data-dismiss="modal" aria-hidden="true">&times;</button> -->
          
      </div>

        <label for="userName" class="sr-only">Username</label>
        <input type="text" size="10" id="userName" name="userName" class="form-control" placeholder="Username" required="" autofocus=""/>
        <br/>
        <label for="password" class="sr-only">Password</label>
        <input type="password" size="10" id="password" name="password" class="form-control" placeholder="Password" required=""/>
        <br/>
        
        <button class="btn btn-lg btn-primary btn-block" <input type="submit" value="login"/>Login</button>

        <!-- <div class="col-md-5">
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control input-lg" placeholder="Your Name" id="name" required="" data-validation-required-message="Please enter your name" aria-invalid="false">
                            <p class="help-block"></p>
                        </div>
                    </div> 
                    <div class="control-group">
                        <div class="controls">
                            <input type="email" class="form-control input-lg" placeholder="Your Email" id="email" required="" data-validation-required-message="Please enter your email" aria-invalid="false">
                            <p class="help-block"></p>
                        </div>
                    </div> 
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control input-lg" placeholder="3+1=" id="captcha" required="" pattern="4" data-validation-required-message="Please prove you're not a robot">
                            <p class="help-block"></p>
                        </div>
                    </div> 
                </div> -->

        </form>
     <!-- </form> -->
     </div> 
    </div> <!-- /container -->
  

  

</body></html>