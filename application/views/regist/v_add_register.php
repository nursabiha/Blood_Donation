<!--/**********************************************************************************************************************
*FIle Name                       : v_add_register.php
*Description                     : view : template for add user to register
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 10th September 2015
*Version		                 :
*Modification Log                :
***********************************************************************************************************************/ -->

<!-- <!DOCTYPE html>
<html lang="en">
<body>
 -->
<style>
th,td{
    padding: 10px;
}

</style>

<!-- <fieldset> -->
    <div class="container">
      <div class="row">
      <div class="col-md-20 toppad  pull-right col-md-offset-3 ">
      <br><p class=" text-info"> </p>
      </div>
      <div class="panel "></div>
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 toppad" >
   
          <div class="panel panel-info">
          <div class="panel-heading">

        <center><h3 style="font-family:broadway" class="panel-title"><b> REGISTER DONATER <b></h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-20 col-lg-20 " align="center"> </div>
                  <div class=" col-md-40 col-lg-40"> 
                  <table class="table table-user-information">
                    <tbody align="center">


<!-- 
    <hr />
    <h3 align="center"><b>REGISTER DONATER<b></h3>
    <hr />
<div>
    <div class="col-lg-10 col-lg-offset-1 toppad">
    	<div class="well bs-component">
    		<div class="container"> -->

	<form method="post" action="<?php echo site_url('c_register/check_register'); ?>" autocomplete="on">
		<!-- start id-form -->
        
		<table align="center">
		<tr>
			<th>Name </th>
			<td>:</td>
			<td><input action="demo_form.asp" method="post" class="form-control" type="text" size="8" id="userName" name="userName" value="" placeholder="Name" required="" /></td>
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
			<td><textarea class="form-control" type="text" size="10" id="userAddress" name="userAddress" value="" placeholder="" required="" /></textarea></td>
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
	</div>
	</table>
	 	<!-- end id-form  -->
    </form>
    <!-- 		</div>
    	</div>
    </div>
</div>
 -->
					</tbody>
               	</table>

              </div>
            </div>    
          </div>
        </div>
      </div>
    </div>
</div><br>


	<!-- </fieldset> -->
	<!-- jQuery -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<!-- 
</body>
</html> -->

<!--
/**********************************************************************************************************************
* End of v_add_register.php
***********************************************************************************************************************/