<!-- /**********************************************************************************************************************
*FIle Name                       : v_update_donation.php
*Description                     : view : template for add donation
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 11th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/ -->

<!DOCTYPE html>
<html lang="en">

<style>
th,td{
    padding: 5px;
}

</style>
<body>
<fieldset>
     <h2 align="center">UPDATE DONATION</h2>
        <hr />
<div class="col-lg-8 col-lg-offset-2 toppad">
<div class="well bs-component">
<div class="container">

	<form class="form-horizontal" role="form" method="post" action="<?php echo site_url('c_admin/update_donation'); ?>">
		<!-- start id-form -->
		
		<h1 align="center">&nbsp;</h1>
		<table align="center">
          <!-- <table class="col-lg-6"> -->
		        
	<?php 
		//print_r($viewdata);
		foreach($donate as $id) {
	?>
		<tr>
			<td><input class="form-control" type="hidden" size="10" name="id_donation" value="<?php echo $this->session->userdata('id_donation') ?>"/></td>
			<td><input class="form-control" type="hidden" name="id_donation" value="<?= $id->id_donation ?>"></td>
		</tr>
		<tr>
			<th>Date </th>
			<td>:</td>
			<td><input class="form-control" type="date" size="10" id="donationDate" name="donationDate" value="<?=$id->donationDate;?>" placeholder="Name" required="" /></td>
			<td><div id="disp">&nbsp;</div></td>
		</tr>
        <tr>
			<th>Siries No.</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="10" id="donationSiri" name="donationSiri" cols="45" rows="3" value="<?=$id->donationSiri;?>" placeholder="" required="" ></td>
			<td>&nbsp;</td>
		</tr>
        <tr>
			<th>Amount(ml)</th>
			<td>:</td>
			<td><input action="demo_form.asp" method="post" class="form-control" type="text" size="10" id="donationAmount" name="donationAmount" value="<?=$id->donationAmount;?>" placeholder="ml" required="" /></td>
			<td>&nbsp;</td>
		</tr>
		 <tr>
			<th>Hospital</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="10" id="hospType" name="hospType" value="<?=$id->hospType;?>" placeholder="" required="" /></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th>Remark</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="10" id="donationRemark" name="donationRemark" value="<?=$id->donationRemark;?>" placeholder="" required="" /></td>
			<td><div id="disp">&nbsp;</div></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<!-- <button class="btn btn-primary" type="submit">submit</button> -->
			<td><button class="btn btn-primary glyphicon glyphicon-send" value="Submit" type="submit">Submit</button>
			<button type="reset" value="Reset" class="btn btn-primary glyphicon glyphicon-reset">Reset</button>
			</td>
			
		</tr>
	
	<?php } ?>
	</table>
	
	<!-- end id-form  -->
    </form>
</div>
</div>
</div>
</fieldset>
</body>

<!--
/**********************************************************************************************************************
* End of v_update_donation.php
***********************************************************************************************************************/ -->