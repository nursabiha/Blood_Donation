<!-- /**********************************************************************************************************************
*FIle Name                       : v_add_register.php
*Description                     : view : template for add user to register
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 10th September 2015
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
<body><!-- 
<?php
	print_r($user_gender);

?> -->
<!-- <fieldset> -->
    <hr />
    <h3 align="center"><b>REGISTER DONATER<b></h3>
    <hr />
    <div>
    <div class="col-lg-10 col-lg-offset-1 toppad">
    <div class="well bs-component">
    <div class="container">
	<form method="post" action="<?php echo site_url('c_register/check_register'); ?>" autocomplete="on">
		<!-- start id-form -->
        
		<table align="center">
		<tr>
			<th>Name </th>
			<td>:</td>
			<td><input class="form-control" type="text" size="8" id="userName" name="userName" value="" placeholder="Name" required="" /></td>
			<td><div id="disp">&nbsp;</div></td>
		</tr>
        <tr>
			<th>Identification Card No.</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="8" id="userIc" name="userIc" cols="45" rows="3" value="" placeholder="" required="" ></td>
			<td>&nbsp;</td>
		</tr>
        <tr>
			<th>Gender</th>
			<td>:</td>
			<td>
			<select name="id_gender"><!-- 
				<?php foreach ($user_gender as $id) { ?>
				<option><?=$id->genderType; ?></option>
				<?php } ?> -->

				<?php //foreach ($user_gender as $i) { 
				if($user_gender->id_gender =="1" ) {
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
		<!--  <input class="form-control" type="text" size="8" id="genderType" name="genderType" value="" placeholder="" required="" />  -->
			</td>
			<td><div id="disp">&nbsp;</div></td>
		</tr>
        <tr>
			<th>Blood Type</th>
			<td>:</td>
			<td>
			<select name="id_blood"><!-- 
				<?php foreach ($blood as $id) { ?>
				<option><?=$id->bloodType; ?></option>
				<?php } ?> -->

			<?php //foreach ($blood as $i) {
				if($blood->id_blood =="1" ) {
					?>
				<option value="1" selected>A</option>
				<option value="2" >B</option>
				<option value="3" >AB</option>
				<option value="4" >O</option>
				<!-- <option><?=$i->bloodType; ?></option> -->
				<?php  } 
				else if($blood->id_blood =="2" )
				{ ?>
				<option value="1" >A</option>
				<option value="2" selected>B</option>
				<option value="3" >AB</option>
				<option value="4" >O</option>
				<!-- <option><?=$i->bloodType; ?></option> -->
				<?php } 
				else if($blood->id_blood =="3" )
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
			<!-- <input action="demo_form.asp" method="post" class="form-control" type="text" size="8" id="bloodType" name="bloodType" value="" placeholder="" required="" /> -->
			</td>
			<td>&nbsp;</td>
		</tr>
        <tr>
			<th>Blood Rhesus</th>
			<td>:</td>
			<td>
				<select name="id_rh">
  				<?php //foreach ($user_rh as $i) {
				if($user_rh->id_rh =="1" ) {
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
			<!-- <select>
				<?php foreach ($user_rh as $id) { ?>
				<option><?=$id->rhType; ?></option>
				<?php } ?>
  			</select> -->
			<!-- <input class="form-control" type="text" size="8" id="rhType" name="rhType" value="" placeholder="" required="" /> -->
			</td>
			<td>&nbsp;</td>
		</tr>
        <tr>
			<th>Address</th>
			<td>:</td>
			<td><textarea action="demo_form.asp" method="post" class="form-control" type="text" size="10" id="userAddress" name="userAddress" value="" placeholder="" required="" /></textarea></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="8" id="userEmail" name="userEmail" value="" placeholder="" required="" /></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th>Phone No.</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="8" id="userPhone" name="userPhone" value="" placeholder="" required="" /></td>
			<td>&nbsp;</td>
		</tr>
	<div>	
	<tr>
		<th>&nbsp;</th>
		
		<td><center><button type="submit" class="btn btn-primary glyphicon glyphicon-send"> SUBMIT</button>
			<button type="reset" class="btn btn-primary">RESET</button></center></td>
			
		<td>&nbsp;</td>
	</tr>
	<div>
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

<!-- add register by popup jquery
	<div class="modal-content">
	        <div class="modal-header">
		        <button type="button" class="close red" style="margin-right:7px;" data-dismiss="modal" aria-hidden="true">×</button>
		        <h4 class="modal-title">Daftar Admin Baru</h4>
	        </div>
        	<div class="modal-body no-padding-bottom">
        		<form id="formAddNewAdmin" name="formAddNewAdmin" class="form-horizontal" role="form" enctype="multipart/form-data" action="" method="post" novalidate="novalidate">
        			<div class="form-group">
		        		<div>
							<label class="col-sm-5 control-label no-padding-right" for="eCriteria"> *Nama Admin Baru:</label>
							<div class="col-sm-7">
								<div class="input-group input-group-sm col-sm-9 no-padding-left">
									<input type="text" id="nAdminName" name="nAdminName" class="form-control validate[required] text-input">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
		        		<div>
							<label class="col-sm-5 control-label no-padding-right" for="eCriteria"> *Nama Pengguna :</label>
							<div class="col-sm-7">
								<div class="input-group input-group-sm col-sm-9 no-padding-left">
									<input type="text" id="nAdminUserName" name="nAdminUserName" class="form-control validate[required] text-input">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
		        		<div>
							<label class="col-sm-5 control-label no-padding-right" for="eCriteria"> *Alamat Email :</label>
							<div class="col-sm-7">
								<div class="input-group input-group-sm col-sm-9 no-padding-left">
									<input type="email" id="nAdminEmail" name="nAdminEmail" class="form-control validate[required,custom[email]]">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
		        		<div>
							<label class="col-sm-5 control-label no-padding-right" for="eCriteria"> *No Telefon :</label>
							<div class="col-sm-7">
								<div class="input-group input-group-sm col-sm-9 no-padding-left">
									<input type="text" id="nAdminTel" name="nAdminTel" class="form-control validate[required,custom[phone]]">
								</div>
							</div>
						</div>
					</div>
				</form>		
        	</div>
        	<div class="modal-footer no-margin-top">
				<button id="saveNewAdmin" class="btn btn-success" type="button">
					<i class="icon-save align-top bigger-110"></i> Daftar
				</button>
				<button class="btn btn-inverse" type="button" data-dismiss="modal">
					<i class="icon-reply align-top bigger-110"></i> Kembali
				</button>
        	</div>
      	</div> -->



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