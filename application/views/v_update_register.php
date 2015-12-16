<!-- /**********************************************************************************************************************
*FIle Name                       : v_update_register.php
*Description                     : view : template for edit and update user profile
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 14th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/ -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>System</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/material.min.css">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/css/material-fullpalette.css" rel="stylesheet">

    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.8.2.min.js"></script>     

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<style>
th,td{
    padding: 10px;
}

</style>
<body>
<!-- <fieldset> -->
    <hr />
    <h3 align="center"><b>UPDATE DONATER PROFILE<b></h3>
    <hr />
    <div>
    <div class="col-lg-10">
    <div class="well bs-component">
    <div class="container">
	<form class="form-horizontal" method="post" role="form" action="<?php echo site_url('c_register/update_register'); ?>" autocomplete="on">
		<!-- start id-form -->
        
		<table align="center">
  
		<?php 
        //print_r($user);
		foreach($user as $id) {
		?> 

		 <tr>
			<th>Name </th>
			<td>:</td>
			<input type="hidden" name="id_user" value="<?=$id->id_user;?>">
			<td><input action="demo_form.asp" method="post" class="form-control" type="text" size="8" id="userName" name="userName" value="<?=$id->userName;?>" placeholder="Name" required="" /></td>
			<td><div id="disp">&nbsp;</div></td>
		</tr>
        <tr>
			<th>Identification Card No.</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="8" id="userIc" name="userIc" cols="45" rows="3" value="<?=$id->userIc;?>" placeholder="" required="" ></td>
			<td>&nbsp;</td>
		</tr>
        <tr>
			<th>Gender</th>
			<td>:</td>
			<td>
			<select name="id_gender" >
				<?php //foreach ($user_gender as $i) { 
				if($id->id_gender =="1" ) {
					?>
				<option value="1" selected>male</option>
				<option value="2" >female</option>
				<!-- <option><?=$i->genderType; ?></option> -->
				<?php  } 
				else
				{ ?>
				<option value="1" >male</option>
				<option value="2" selected >female</option>
				<?php	
				} ?>
  			</select>
			  <!-- <input class="form-control" type="text" size="8" id="genderType" name="genderType" value="<?=$id->genderType;?>" placeholder="" required="" />   -->
			</td>

			<td><div id="disp">&nbsp;</div></td>
		</tr>
        <tr>
			<th>Blood Type</th>
			<td>:</td>
			<td>
			<select name="id_blood">
				<?php //foreach ($blood as $i) {
				if($id->id_blood =="1" ) {
					?>
				<option value="1" selected>A</option>
				<option value="2" >B</option>
				<option value="3" >AB</option>
				<option value="4" >O</option>
				<!-- <option><?=$i->bloodType; ?></option> -->
				<?php  } 
				else if($id->id_blood =="2" )
				{ ?>
				<option value="1" >A</option>
				<option value="2" selected>B</option>
				<option value="3" >AB</option>
				<option value="4" >O</option>
				<!-- <option><?=$i->bloodType; ?></option> -->
				<?php } 
				else if($id->id_blood =="3" )
				{ ?>
				<option value="1" >A</option>
				<option value="2" >B</option>
				<option value="3" selected>AB</option>
				<option value="4" >O</option>
				<!-- <option><?=$i->bloodType; ?></option> -->
				<?php }
				else
				{ ?>
				<option value="1" >A</option>
				<option value="2" >B</option>
				<option value="3" >AB</option>
				<option value="4" selected>O</option>
				<?php } ?>
  			</select>
			 <!-- <input action="demo_form.asp" method="post" class="form-control" type="text" size="8" id="bloodType" name="<?=$id->bloodType;?>" value="" placeholder="" required="" />  -->
			</td>
			<td>&nbsp;</td>
		</tr>
        <tr>
			<th>Blood Rhesus</th>
			<td>:</td>
			<td>
			<select name="id_rh">
				<?php //foreach ($user_rh as $i) {
				if($id->id_rh =="1" ) {
					?>
				<option value="1" selected>+ve</option>
				<option value="2" >-ve</option>
				<!-- <option><?=$i->rhType; ?></option> -->
				<?php  } 
				else
				{ ?>
				<option value="1" >+ve</option>
				<option value="2" selected >-ve</option>
				<?php	
				} ?>
  			</select>
			 <!-- <input class="form-control" type="text" size="8" id="rhType" name="rhType" value="<?=$id->rhType;?>" placeholder="" required="" />  -->
			</td>
			<td>&nbsp;</td>
		</tr>
        <tr>
			<th>Address</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="10" id="userAddress" name="userAddress" value="<?=$id->userAddress;?>" placeholder="" required="" /></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th>Phone No.</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="8" id="userPhone" name="userPhone" value="<?=$id->userPhone;?>" placeholder="" required="" /></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="8" id="userEmail" name="userEmail" value="<?=$id->userEmail;?>" placeholder="" required="" /></td>
			<td>&nbsp;</td>
		</tr>
        <!-- <tr>
			<th>Phone No.</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="8" id="userPhone" name="userPhone" value="<?=$id->userPhone;?>" placeholder="" required="" /></td>
			<td><div id="disp">&nbsp;</div></td>
		</tr> -->
		
	<div>	
	<tr>
		<th>&nbsp;</th>
		<td>&nbsp;</td>
		<td><center><button type="submit" class="btn btn-primary glyphicon glyphicon-send">Submit</button>
			<button type="reset" class="btn btn-primary">Reset</button></center></td>
		<td>&nbsp;</td>
	</tr>
	<div> 
	<?php } ?> 
	 </table>
	 	<!-- end id-form  -->
    </form>
    </div>
    </div>
    </div>
    </div>
<!-- </fieldset> -->
<!-- jQuery -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

</body>
<!-- 
  <script type="text/javascript">

         var base_url = "<?=base_url()?>"

		$(document).ready(function()
		{
		    $("#id_donation").keyup(function() 
		    {
		
		        var id_donation = $('#id_donation').val();
				if(id_donation=="")
				{
				    $("#disp").html("");
				}
				else
				{
						$.ajax
						({
							type: "POST",
							url: base_url+"index.php/student/checked_student",
							data: "id_donation="+ id_donation ,
							success: function(html)
							{
							   $("#disp").html(html);
							}
						});
				    return false;
				}
		    });
		});
</script> 
 -->
</html>