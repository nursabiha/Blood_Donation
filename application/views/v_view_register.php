<!-- /**********************************************************************************************************************
*FIle Name                       : v_view_register.php
*Description                     : view : view register
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 7th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/ -->

<!--<?php
print_r($darah);
?>-->
<div class="container">
      <div class="row">
      <div class="col-md-20 toppad  pull-right col-md-offset-3 ">
         
       <br>
<p class=" text-info"> </p>
      </div>


      <div class="col-sm-12" align="right">
      <div id="sample-table-2_filter" class="dataTables_filter">
        <label>Carian :<input type="search" class="" placeholder=" ic no " aria-controls="sample-table-2"></label>
      </div></div>
      
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
   
          <div class="panel panel-info">
          <div class="panel-heading">

      <div class="col-sm-6">
      <div class="dataTables_length" id="sample-table-2_length">
        <label>Display <select name="sample-table-2_length" aria-controls="sample-table-2" class="">
        <option value="3">3</option><option value="25">25</option><option value="50">50</option>
        <option value="100">100</option></select> records</label>
      </div></div>

              <center><h3 class="panel-title"><b> PROFILE DETAIL <b></h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-20 col-lg-20 " align="center"> </div>
                
                  <div class=" col-md-40 col-lg-40"> 
                  <table class="table table-user-information">
                    <tbody align="center">
                   
                    <tr>
                    <th><center>Name</center></th>
                    <th><center>Identification Card No.</center></th>  
                    <th><center>Gender</center></th>  
                    <th><center>Blood Type</center></th>
                    <th><center>Rhesus</center></th>
                    <th><center>Address</center></th>
                   <!--  <th><center>Phone NO.</center></th> -->
                    <th><center>Email</center></th>
                    <th colspan='3'><center>Action</center></th>
                    
                    </tr>

                  <?php
                     foreach ($user as $id) {
                  ?>
	                    <tr>
                        <td><?=$id->userName;  ?></td>  
                        <td><?=$id->userIc; ?></td> 
                        <td><?=$id->genderType;  ?></td> 
                        <td><?=$id->bloodType; ?></td>
                        <td><?=$id->rhType; ?></td> 
                        <td><?=$id->userAddress; ?></td>
                        <!-- <td><?=$id->userPhone; ?></td> --> 
                        <td><?=$id->userEmail; ?></td> 
                        <td><span class="btn btn-info glyphicon glyphicon-edit" role="button">
                        <?php echo anchor('c_register/edit_register/'.$id->id_user, '', array('onClick' => "return confirm('Are you sure you want to update?')" ));?>
                        </span></td>
                        <td><span class="btn btn-danger glyphicon glyphicon-remove" role="button">
                        <?php echo anchor('c_register/delete_register/'.$id->id_user, '', array('onClick' => "return confirm('Are you sure you want to delete?')" ));?>
                        </span></td>
                        </tr>

                  <?php } ?> 
                  <tr>
                       
                    </tr>
                    </tbody>
                  </table>    
                  <div>
                 <center><a href="<?= site_url('c_register/add_register');?>" class="btn btn-primary glyphicon glyphicon-plus" role="button">ADD NEW REGISTER</a></center>

                 <!-- <button id="addcustomer" class="btn btn-xs btn-success no-border">
                      <i class="icon-plus bigger-110"></i>
                      <span class="bigger-110 no-text-shadow">Daftar Penyelaras</span>
                      </button> -->
                 </div>
                  
                          
              </div>
            </div>    
          </div>
        </div>
      </div>
    </div>
     
