<!-- /**********************************************************************************************************************
*FIle Name                       : v_add_staf.php
*Description                     : view : template for add user to register
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 22th Oktober 2015
*Version		                 : 1.0
*Modification Log                :
***********************************************************************************************************************/ -->

<!DOCTYPE html>
<html lang="en">

<style>
th,td{
    padding: 10px;
}

</style>
<body>
<!-- <fieldset> -->
    <hr />
    <h3 align="center"><b>REGISTER STAF<b></h3>
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
			<select name="genderType">
			<option>--Sila Pilih--</option>
				<?php //foreach ($user_gender as $i) { 
				if($user_detail->genderType =="male" ) {
					?>
				<option value="male" selected>male</option>
				<option value="female" >female</option>
				
				<?php  } 
				else
				{ ?>
				<option value="male" >male</option>
				<option value="female" selected >female</option>
				<?php	
				} ?>
  			</select>
		
			<td><div id="disp">&nbsp;</div></td>
		</tr>
        <tr>
			<th>Blood Type</th>
			<td>:</td>
			<td>
			<select name="bloodType">
			<option>--Sila Pilih--</option>
			<?php //foreach ($blood as $i) {
				if($user_detail->bloodType =="A" ) {
					?>
				<option value="A" selected>A</option>
				<option value="B" >B</option>
				<option value="AB" >AB</option>
				<option value="O" >O</option>
			
				<?php  } 
				else if($user_detail->bloodType =="B" )
				{ ?>
				<option value="A" >A</option>
				<option value="B" selected>B</option>
				<option value="AB" >AB</option>
				<option value="O" >O</option>
				
				<?php } 
				else if($user_detail->bloodType =="AB" )
				{ ?>
				<option value="A" >A</option>
				<option value="B" >B</option>
				<option value="AB" selected>AB</option>
				<option value="O" >O</option>
				
				<?php }
				else
				{ ?>
				<option value="A" >A</option>
				<option value="B" >B</option>
				<option value="AB" >AB</option>
				<option value="O" selected>O</option>
				<?php } ?>
  			</select>
			
			</td>
			<td>&nbsp;</td>
		</tr>
        <tr>
			<th>Blood Rhesus</th>
			<td>:</td>
			<td>
				<select name="rhType">
				<option>--Sila Pilih--</option>
  				<?php //foreach ($user_rh as $i) {
				if($user_detail->rhType =="+ve" ) {
					?>
				<option value="+ve" selected>+ve</option>
				<option value="-ve" >-ve</option>
				<!-- <option><?=$i->rhType; ?></option> -->
				<?php  } 
				else
				{ ?>
				<option value="+ve" >+ve</option>
				<option value="-ve" selected >-ve</option>
				<?php	
				} ?>
				</select>
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
		<td>&nbsp;</td>
		<td><center><button type="submit" class="btn btn-primary glyphicon glyphicon-send"> SUBMIT</button>
			<button type="reset" class="btn btn-primary">RESET</button></center></td>
			
		
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

</html>

<!--
/**********************************************************************************************************************
* End of v_add_register.php
***********************************************************************************************************************/ -->