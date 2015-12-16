<!--/**********************************************************************************************************************
*FIle Name                       : v_templateDonator.php
*Description                     : view : view template
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 11th November 2015
*Version                         : 1.0
*Modification Log                : 26th November 2015
***********************************************************************************************************************/ -->

<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico"> -->

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/css/smoothslide/smoothslides.theme.css')?>" rel="smoothslide/stylesheet">
    <link href="<?= base_url('assets/css/dashboard.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
     <script src="<?= base_url('assets/js/jquery.js')?>"></script>
     <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
     <script src="<?= base_url('assets/js/bootstrap.js')?>"></script>

    
</head>

  <!-- header -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12" align="center"> 

      </div>
    </div>
  </div>

  <body>

<div class="panel panel-danger">
    <div class="panel-heading">
      <center>Blood Donation</center></div>
        <div class="navbar-header">

 </div> </div>

<!-- navbar header -->
    <nav class="navbar navbar-inverse navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" class="bounce" href="#">BLOOD DONATION</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../c_page/view_homepage">
                <span class="glyphicon glyphicon-home"></span> Homepage</a></li>
            <li><a href="../c_register/check_register">
                <span class="glyphicon glyphicon-user"></span> Profile<span class="caret"></a>
              <ul class="dropdown-menu" role="menu">
            </li>
            <li><a href="<?php echo site_url('c_page/view_note');?>">
              <span class="glyphicon glyphicon-bookmark"></span> Info</a></li>
            <li><a href="../c_page/view_frontpage">
              <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>

          <!-- <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form> -->

        </div>
      </div> 
    </nav>

    

    <!-- beginning of the body -->
<div class="panel panel-danger">
            <!-- <div class="panel-heading">
              <center><h3 class="panel-title"><b>  <b></h3></center>
            </div> -->
            <div class="panel-bodys">
              <div class="row">
                <div class="col-md-12 " align="center"> </div>

                  <div class=" col-md-12 "> 
                  <!-- <table class="table table-user-information"> -->
                    <tbody align="center">
                   
             <?= $connectDonator ?>

                 
                    </tbody>
                  <!-- </table>  -->            
              </div>
            </div>    
          </div>
        </div>
      </div>
    </div>

    <div class="progress">
      <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="10" style="width: 100%">
        <span class="sr-only">100% Complete (info)</span>
      </div>
    </div>

     <nav class="navbar navbar-inverse navbar">
      <div class="container-fluid">
        <div class="navbar-footer"><center>Blood is meant to circulate. Pass it around. Blood Donation<span class="glyphicon glyphicon-registration-mark"></center>

          <!-- beginning footer body -->

          <!-- ending footer body -->
   <!--  <div class="panel-footer">Panel Footer</div> -->
  </div></div>

    </b></b></div><b><b>
     



    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <!-- // <script src="assets/css/bootrap.min.css"></script> -->

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
     <!-- <script src="../../assets/js/vendor/holder.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  

</body>



</html>

<style>
.body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 10;
    color: #656262;
    background-color: #fff;
}

.container {
  background-color:#999966;
  margin-top:0px;
}

.panel-bodys {
    padding: 3px;
}

</style>
<!--
/**********************************************************************************************************************
* End of v_templateDonator.php
***********************************************************************************************************************/ 