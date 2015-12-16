<!-- /**********************************************************************************************************************
*FIle Name                       : v_login admin.php
*Description                     : view : template for login
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 26th November 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/ -->


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
  
        <link rel="stylesheet" href="<?=base_url()?>assets/css/login/style1.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/scss/style.css">

    
  </head>

  <body>

    <body class="align">

  <div class="site__container">

    <div class="grid__container">

      <form action="<?= site_url('c_page/view_homepage'); ?>" method="post" class="form form--login">

        <div class="form__field">
          <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
          <input id="login__username" type="text" class="form__input" placeholder="Username" required>
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
          <input id="login__password" type="password" class="form__input" placeholder="Password" required>
        </div>

        <div class="form__field">

          <input type="submit" value="Sign In">
        </div>

      </form>

     <!--  <p class="text--center">Not a member? <a href="#">Sign up now</a> <span class="fontawesome-arrow-right"></span></p> -->
    </div>

  </div>

</body>
    
   
  </body>
</html>
