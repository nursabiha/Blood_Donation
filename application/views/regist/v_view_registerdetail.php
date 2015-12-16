<!-- /**********************************************************************************************************************
*FIle Name                       : v_view_registerdetail.php
*Description                     : view : view list of one user
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 22th September 2015
*Version                         : 1.0
*Modification Log                :
***********************************************************************************************************************/ -->

<div class="container">
      <div class="row">
      <div class="col-md-20 toppad  pull-right col-md-offset-3 ">
         
       <br>
<p class=" text-info"> </p>
      </div>
      
        <div class="col-xs-2 col-sm-4 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 toppad" >
   
          <div class="panel panel-info">
          <div class="panel-heading">

              <center><h3 class="panel-title"><b> PROFILE DETAIL <b></h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-20 col-lg-20 " align="center"> </div>
                
                  <div class=" col-md-40 col-lg-40"> 
                  <table class="table table-user-information">
                    <tbody align="center">
                    
                   <?php
                     foreach ($user as $id) {
                    ?> 
                 
                     <!--  <td type="hidden"><?=$id->id_user;?></td> -->
                      <!-- <td type="hidden" name="id_user" value="<?=$id->id_user;?>"></td> -->
                
                    <tr>
                      <th><center>Name</center></th>
                      <td><?=$id->userName;  ?></td>
                    </tr>
                    <tr>
                      <th ><center>Identification Card No.</center></th>
                      <td><?=$id->userIc; ?></td>  
                    </tr>
                    <tr> 
                      <th><center>Gender</center></th> 
                      <td><?=$id->genderType; ?></td>
                    </tr>
                    <tr>
                      <th><center>Blood Type</center></th>
                      <td><?=$id->bloodType;  ?>
                      </td>
                    </tr>
                    <tr>
                      <th><center>Rhesus</center></th>
                      <td><?=$id->rhType; ?></td>
                      </td>
                    </tr>
                    <tr>
                      <th><center>Address</center></th>
                      <td><?=$id->userAddress; ?></td>
                    </tr>
                    <tr>
                      <th><center>Phone NO.</center></th>
                      <td><?=$id->userPhone; ?></td>
                    </tr>
                    <tr>
                      <th><center>Email</center></th>
                      <td><?=$id->userEmail; ?></td> 
                    </tr>
                    <tr>
                      <th><center>Action</center></th>
                        <td><span data-original-title="Edit this user" data-toggle="tooltip" class="btn btn-info glyphicon glyphicon-edit" role="button">
                        <?php echo anchor('c_register/edit_register/'.$id->id_user, 'UPDATE', array('onClick' => "return confirm('Are you sure you want to update?')" ));?>
                        </span>
                        <span data-original-title="Remove this user" data-toggle="tooltip" class="btn btn-danger glyphicon glyphicon-remove" role="button">
                        <?php echo anchor('c_register/delete_register/'.$id->id_user, 'DELETE', array('onClick' => "return confirm('Are you sure you want to delete?')" ));?>
                        </span></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><div>
                        <center><a href="<?= site_url('c_admin/view_donation/'.$id->id_user);?>" class="btn btn-success glyphicon glyphicon-save" role="button">VIEW DONATION</a></center> 
                      </div></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><div>
                        <center><a href="<?= site_url('c_register/check_register/'.$id->id_user);?>" class="btn btn-primary glyphicon glyphicon-arrow-left" role="button"> BACK</a></center> 
                      </div></td>
                      <!-- <button onclick="goBack()">Back</button> -->
                    </tr>
                     <?php } ?>
                    </tbody>
                  </table>    



                  <!-- <div>
                  <center><a href="<?= site_url('c_admin/view_donation');?>" class="btn btn-success glyphicon glyphicon-plus" role="button">View Donation</a></center>
                  <button id="addcustomer" class="btn btn-xs btn-success no-border">
                      <i class="icon-plus bigger-110"></i>
                      <span class="bigger-110 no-text-shadow">Daftar Penyelaras</span>
                      </button> 
                 </div> -->
                  
                          
              </div>
            </div>    
          </div>
        </div>
      </div>
    </div>
    <br>
     
<script>
function goBack() {
    window.history.back();
}
</script>
<!--
/**********************************************************************************************************************
* End of v_view_registerdetail.php
***********************************************************************************************************************/ -->