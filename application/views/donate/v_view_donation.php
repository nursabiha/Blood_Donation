<!-- /**********************************************************************************************************************
*FIle Name                       : v_view_donation.php
*Description                     : view : view donation
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 7th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/ -->


<div class="container">
      <div class="row">
      <div class="col-md-5 toppad  pull-right col-md-offset-3 ">
       <br>
<p class=" text-info"> </p>
      </div>
        <div class="col-xs-15 col-sm-15 col-md-8 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 toppad" >
   
      
      <div class="panel panel-info">
      <div class="panel-heading">

      <div class="col-sm-6">
      <div class="dataTables_length" id="sample-table-2_length">
        <label>Display <select name="sample-table-2_length" aria-controls="sample-table-2" class="">
        <option value="3">3</option><option value="25">25</option><option value="50">50</option>
        <option value="100">100</option></select> records</label>
      </div></div>
 
        <center><h3 class="panel-title"><b> BLOOD DONATION DETAIL <b></h3></center>
        </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-10 col-lg-10 " align="center"> </div>
                
                  <div class=" col-md-25 col-lg-25"> 
                  <table class="table table-user-information">
                    <tbody align="center">
                   
                    <tr>
                    <th><center>Date</center></th>
                    <th><center>id</center></th>
                    <th><center>id user</center></th>
                    <th><center>Siries No.</center></th>  
                    <th><center>Amount(ml)</center></th>  
                    <th><center>Hospital</center></th>
                    <th><center>Remark</center></th>
                    <th></th>
                    <th></th>
                    </tr>
                   
                  <?php

                     foreach ($donate as $id) 
                     {
                  ?>
                  
                    <input type="hidden" name="id_user" value="<?=$id->id_user;?>">
	                    <tr>
                        <td><?=$id->donationDate;  ?></td> 
                        <td><?=$id->id_donation;  ?></td>  
                        <td><?=$id->id_user; ?></td>  
                        <td><?=$id->donationSiri; ?></td> 
                        <td><?=$id->donationAmount; ?></td> 
                        <td><?=$id->hospType; ?></td>
                      <!--   <td><?=$id->hospType; ?></td> -->
                        <td><?=$id->donationRemark; ?></td> 

                  <td><span class="btn btn-info glyphicon glyphicon-edit" role="button">
                  <?php echo anchor('c_admin/edit_donation/'.$id->id_donation, 'UPDATE', array('onClick' => "return confirm('Are you sure you want to update?')" ));?>
                  </span></td>
                  <td><span class="btn btn-danger glyphicon glyphicon-remove" role="button">
                  <?php echo anchor('c_admin/delete_donation/'.$id->id_donation, 'DELETE', array('onClick' => "return confirm('Are you sure you want to delete?')" ));?>
                  </span></td>
                  
                  <!-- <td><a href="<?= site_url('c_admin/edit_donation');?>" class="btn btn-info glyphicon glyphicon-edit" onClick = "return confirm('Are you sure you want to update?')" role="button">UPDATE</a>  </td> -->
                     <!--   <td><a href="<?= site_url('c_admin/delete_donation');?>" class="btn btn-danger glyphicon glyphicon-remove" onClick = "return confirm('Are you sure you want to delete?')" role="button">DELETE</a>  </td> -->
                  </tr>
                   
                <?php
                  }
                ?> 
                  <tr>
                       
                    </tr>
                    </tbody>
                  </table>

                  <div>
                 <center><a href="<?= site_url('c_admin/add_donation/'.$donate[0]->id_user);?>" class="btn btn-primary glyphicon glyphicon-plus" role="button">ADD NEW DONATION</a></center>
                 </div><br>
              </div>
            </div>    
          </div>
        </div>
      </div>
    </div></div>
     
<!--
/**********************************************************************************************************************
* End of v_view_donation.php
***********************************************************************************************************************/ -->