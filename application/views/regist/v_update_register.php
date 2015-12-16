<!--/**********************************************************************************************************************
*FIle Name                       : v_update_register.php
*Description                     : view : template for edit and update user profile
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 14th September 2015
*Version		                 :
*Modification Log                :
***********************************************************************************************************************/ -->

<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->

<style>
th,td{
    padding: 10px;
}

</style>
<body>
<!-- <fieldset> -->
<!-- begining panel -->

  	<div class="container">
      <div class="row">
      <form class="form-horizontal" method="post" role="form" action="<?php echo site_url('c_register/update_register'); ?>" autocomplete="on">
      <div class="col-md-20 toppad pull-right col-md-offset-3 ">
      	<br><p class=" text-info"> </p></div>
      <div class="panel "></div>
      <div class="col-xs-10 col-sm-10 col-md-8 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 toppad">
   
        <div class="panel panel-info">
        <div class="panel-heading">
        	<center><h3 style="font-family:broadway" class="panel-title"><b> UPDATE DONATER PROFILE <b></h3></center>
        </div>
           <div class="panel-body">
             <div class="row">
               <div class="col-md-20 col-lg-20 " align="center"> </div>
                 <div class=" col-md-40 col-lg-40"> 
                  <table class="table table-user-information">
                    <tbody align="center">

<!-- ending panel -->
   <!--  <div>
    <div class="col-lg-10">
    <div class="well bs-component">
    <div class="container">
	<form class="form-horizontal" method="post" role="form" action="<?php echo site_url('c_register/update_register'); ?>" autocomplete="on">
 -->		<!-- start id-form -->
        
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
			<select name="genderType">
				<?php //foreach ($user_gender as $i) { 
				if($id->genderType =="male" ) {
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
				
			  <!-- <input class="form-control" type="text" size="8" id="genderType" name="genderType" value="<?=$id->genderType;?>" placeholder="" required="" />   -->
			</td>

			<td><div id="disp">&nbsp;</div></td>
		</tr>
        <tr>
			<th>Blood Type</th>
			<td>:</td>
			<td>
			<select name="bloodType">
				<?php //foreach ($blood as $i) {
				if($id->bloodType =="A" ) {
					?>
				<option value="A" selected>A</option>
				<option value="B" >B</option>
				<option value="AB" >AB</option>
				<option value="O" >O</option>
			
				<?php  } 
				else if($id->bloodType =="B" )
				{ ?>
				<option value="A" >A</option>
				<option value="B" selected>B</option>
				<option value="AB" >AB</option>
				<option value="O" >O</option>
				
				<?php } 
				else if($id->bloodType =="AB" )
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
				<!-- <option><?=$i->bloodType; ?></option> -->
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
			<select name="rhType">
  				<?php //foreach ($user_rh as $i) {
				if($id->rhType =="+ve" ) {
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
	</div> 
	<?php } ?> 

	 </table>
	 	<!-- end id-form  -->
    </form>
   <!--  </div>
    </div>
    </div>
    </div> -->

    				</tbody>
               	</table>
              </div>
            </div>    
          </div>
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
<br>
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
<!-- </html> -->

<!--
/**********************************************************************************************************************
* End of v_update_register.php
***********************************************************************************************************************/