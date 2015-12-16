<!--/**********************************************************************************************************************
*FIle Name                       : v_add_donation.php
*Description                     : view : template for add donation
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 9th September 2015
*Version		                 : 2.0
*Modification Log                :
***********************************************************************************************************************/ -->

<!-- <!DOCTYPE html>
<html lang="en"> -->

<style>
th,td {
    padding: 10px;
}

</style>
<body>
<!-- <fieldset> -->
    <!-- <hr />
    <h3 align="center"><b>REGISTER DONATION<b></h3>
    <hr />
    <div>
    <div class="col-lg-8 col-lg-offset-1 toppad">
    <div class="well bs-component">
    <div class="container"> -->

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

	<form method="post" action="<?= site_url('c_admin/trycheck_donation'.$donate[0]->id_user,'search'); ?>" autocomplete="on">
	
	 <!-- 	<?php  ?>  -->
		<!-- start id-form -->
        
		<table align="center">
		<div>
		<tr>
			<th>Date </th>
			<td>:</td>
			<td><input class="form-control" type="date" size="10" id="donationDate" name="donationDate" value="" placeholder="Name" required="" /></td>
			<td><div id="disp">&nbsp;</div></td>
		</tr>
        <tr>
			<th>Siries No.</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="10" id="donationSiri" name="donationSiri" cols="45" rows="3" value="" placeholder="" required="" ></td>
			<td>&nbsp;</td>
		</tr>
		<!-- cara nak letak text area dalalm alamat -->
		<!-- tr>
			<th>Address</th>
			<td>:</td>
			<td><textarea class="form-control" id="Address" name="Address" cols="45" rows="3" value="" placeholder="Siries No." required="" ></textarea></td>
			<td>&nbsp;</td>
		</tr> -->
        <tr>
        	<input type="hidden" name="id_user" value="<?=$id_user;?>">
			<th>Amount(ml)</th>
			<td>:</td>
			<td><input action="demo_form.asp" method="post" class="form-control" type="text" size="10" id="donationAmount" name="donationAmount" value="" placeholder="ml" required="" /></td>
			<td>&nbsp;</td>
		</tr>

		 <tr>
			<th>Hospital</th>
			<td>:</td>
			<td><select name ="hospital">
				<optioon>-Sila Pilih-</option>
					<?php foreach ($hosp_detail as $key) {
                        ?>
                        <option value="<?=$key->id_hosp?>"><?=$key->hospType?></option>
                    <?php } ?>
                </select></td>
			<td>&nbsp;</td>
		</tr>
		
		<tr>
			<th>Remark</th>
			<td>:</td>
			<td><input class="form-control" type="text" size="30" id="donationRemark" name="donationRemark" value="" placeholder="" required="" /></td>
			<td><div id="disp">&nbsp;</div></td>
		</tr>
		
	<tr></tr>
	<tr>
		<th>&nbsp;</th>
		<td>&nbsp;</td>
		<td><button class="btn btn-primary glyphicon glyphicon-send" type="submit">Submit</button>
			<!-- <a href="<?= site_url('c_admin/check_donation');?>"  type="submit" class="btn btn-primary">Submit</button> -->
			<button type="reset" class="btn btn-primary">Reset</button></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	</div>
	</table>
	 <!-- <p align="right"><a href="<?php echo site_url('c_admin/view_donation');?>" class="btn btn-flat btn-info"><i class="small mdi-action-home"></i>Home</a></p> -->
	<!-- end id-form  -->
    </form>

    				</tbody>
               	</table>
              </div>
            </div>    
          </div>
        </div>
      </div>
    </div>
</div><br>

   <!--  </div> </div> </div> </div> <br> -->

	<!-- </fieldset> -->
	<!-- jQuery -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>


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
							url: base_url+"index.php/student/checked_donation",
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

<!-- </body>
</html> -->

<!--
/**********************************************************************************************************************
* End of v_add_donation.php
***********************************************************************************************************************/