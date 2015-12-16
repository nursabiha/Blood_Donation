<!--/**********************************************************************************************************************
*FIle Name                       : v_view_register.php
*Description                     : view : view register
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 7th September 2015
*Version                         : 1.0
*Modification Log                :
***********************************************************************************************************************/ -->
<style>
th,td{
    padding: 10px;
}

</style>

<div class="container">
      <div class="row">
      <div class="col-md-20 toppad  pull-right col-md-offset-3 ">
      <br><p class=" text-info"> </p>
      </div>
      <div class="panel "></div>
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 toppad" >
   
          <div class="panel panel-info">
          <div class="panel-heading">

      <div class="col-sm-6">
      <div class="dataTables_length" id="sample-table-2_length">
        <label>Display <select name="sample-table-2_length" aria-controls="sample-table-2" class="">
        <option value="3">3</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select> records</label>
      </div></div>

            <center><h3 style="font-family:broadway" class="panel-title"><b> PROFILE DETAIL <b></h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-20 col-lg-20 " align="center"> </div>
                  <div class=" col-md-40 col-lg-40"> 
                  <table class="table table-user-information">
                    <tbody align="center">
                   
                    <tr>
                      
                    <!-- <th><center>Name</center></th> -->
                    <th class="left sorting" tabindex="0" aria-controls="user_detail" rowspan="1" colspan="1" aria-label="&amp;nbsp;NAME: activate to sort column ascending" style="width: 400px;"><center>&nbsp;Name</center></th>
                    <th class="left sorting" tabindex="0" aria-controls="user_detail" rowspan="1" colspan="1" aria-label="&amp;nbsp;IC: activate to sort column ascending" style="width: 350px;"><center>&nbsp;Identification Card No.</center></th>
                    <th class="left sorting" tabindex="0" aria-controls="user_detail" rowspan="1" colspan="1" aria-label="&amp;nbsp;Blood: activate to sort column ascending" style="width: 300px;"><center>&nbsp;Blood Type</center></th>

                    <th colspan='1'><center>Action</center></th>
                    </tr>

                  <?php
                     foreach ($user as $id) {
                  ?>
                      <tr>
                        <input type="hidden" name="id_user" value="<?=$id->id_user;?>">
                        <td><?=$id->userName;  ?></td>  
                        <td><?=$id->userIc; ?></td> 
                        <td><?=$id->bloodType; ?></td>

                        <!-- <td><span class="btn btn-info glyphicon glyphicon-edit" role="button">
                          <?php echo anchor('c_register/edit_register/'.$id->id_user, 'UPDATE', array('onClick' => "return confirm('Are you sure you want to update?')" ));?>
                          </span></td>
                        <td><span class="btn btn-danger glyphicon glyphicon-remove" role="button">
                          <?php echo anchor('c_register/delete_register/'.$id->id_user, 'DELETE', array('onClick' => "return confirm('Are you sure you want to delete?')" ));?>
                          </span></td> -->
                        <td>
                          <div><a href="<?= site_url('c_register/view_register/'.$id->id_user);?>" class="btn btn-success glyphicon glyphicon-save" role="button">VIEW</a>
                          </div>
                           
                        </td>
                      </tr>
                  <?php } ?> 


                  </tbody>
                  </table>    
                <div>
                 <center><a href="<?= site_url('c_register/add_register');?>" class="btn btn-primary glyphicon glyphicon-plus" role="button">ADD NEW REGISTER</a></center>
                </div>   
              </div>
            </div>    
          </div>
        </div>
      </div>
    </div><br>
     
<!-- trying and error search function -->
<!-- <title>Search Box Example 2 - default placeholder text gets cleared on click</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" /> -->

<!-- JAVASCRIPT to clear search text when the field is clicked -->
<!--<script type="text/javascript">
window.onload = function(){ 
  //Get submit button
  var submitbutton = document.getElementById("tfq");
  //Add listener to submit button
  if(submitbutton.addEventListener){
    submitbutton.addEventListener("click", function() {
      if (submitbutton.value == 'Search our website'){//Customize this text string to whatever you want
        submitbutton.value = '';
      }
    });
  }
}
</script> -->
    <!-- ending -->

<!--
/**********************************************************************************************************************
* End of v_view_register.php
***********************************************************************************************************************/