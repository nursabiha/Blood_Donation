<!--/**********************************************************************************************************************
*FIle Name                       : v_add_note.php
*Description                     : view : template for add note information
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 26th November 2015
*Version		                     : 1.0
*Modification Log                :
***********************************************************************************************************************/ -->

<!-- <!DOCTYPE html>
<html lang="en">
<body> -->

<style>
th,td {
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

        <center><h3 style="font-family:broadway" class="panel-title"><b> Add Information <b></h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-20 col-lg-20 " align="center"> </div>
                  <div class=" col-md-40 col-lg-40"> 
                  <table class="table table-user-information">
                    <tbody align="center">

	<form method="post" action="<?= site_url('c_page/view_note'); ?>" autocomplete="on">
	
		<!-- start id-form -->
        
	<table align="center">
		<div>
		<tr>
			<input type="hidden" name="id_note" value="<?=$id_note;?>">
			<!-- <td><input action="demo_form.asp" method="post" class="form-control" type="date" size="10" id="donationDate" name="donationDate" value="" placeholder="Insert Title Here.." required="" /></td> -->
			
		</tr>
        <tr>
			<td><input action="demo_form.asp" method="post" class="form-control" type="text" size="10" id="noteTitle" name="noteTitle" cols="60" rows="3" value="" placeholder="Insert your title here" required="" ></td>
		</tr>
		<tr>
			<td><textarea class="form-control" id="noteText" name="noteText" cols="60" rows="10" value="" placeholder="Write your text here.." required="" ></textarea></td>
		</tr>
        <tr>
		</tr>
		<tr>
			<td><button class="btn btn-primary glyphicon glyphicon-send" type="submit">Submit</button>
				<!-- <a href="<?= site_url('c_admin/check_donation');?>"  type="submit" class="btn btn-primary">Submit</button> -->
				<button type="reset" class="btn btn-primary">Reset</button></td>
		</tr>
		<div>
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
</div>
<!-- </fieldset> -->
<!-- jQuery -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

<!-- </body>

</html>
 -->
<!--
/**********************************************************************************************************************
* End of v_add_note.php
***********************************************************************************************************************/