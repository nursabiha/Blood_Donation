<!-- /**********************************************************************************************************************
*FIle Name                       : v_view_userregister.php
*Description                     : view : view register.php
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 4th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/ -->


<!-- foreach ($darah as $key => $value) { -->
	<!-- print_r($value); -->

	<!-- echo 'sayang';} -->

<!--<?php
print_r($darah);


?>-->
<div class="container">
      <div class="row">
      <div class="col-md-5 toppad  pull-right col-md-offset-3 ">
         
       <br>
<p class=" text-info"> </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-2 toppad" >
   
 <!-- print_r($staff); -->
  
          <div class="panel panel-info">
            <div class="panel-heading">
              <center><h3 class="panel-title"> MY PROFILE DETAIL </h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> </div>
                
                
             
                  <div class=" col-md-12 col-lg-12"> 
                  <table class="table table-user-information">
                    <tbody>


                  <?php
                  foreach ($user1 as $id) {

                  ?>

	                   <tr>
                       <th>Name</th>
                       <th> : </th>
                        <td><?=$id->userName;  ?></td>
                      </tr>
                      <tr><th>Blood Group  <!-- <?=$id->id_blood; ?> --></th>
                        <th> : </th>
                        <td>
                         <select>     
                  <?php
                  foreach ($blood as $i) {
                  ?> 
                      <option value=""><?=$i->bloodType; ?></option>
                      <!-- <option value="">B</option>
                      <option value="">AB</option>
                      <option value="">O</option> -->

                    <?php
                      }
                    ?> 
                    </select>

                      </td> 
                      </tr>
                      <tr>
                        <th>Address</th>
                        <th> : </th>
                        <td><?=$id->userAddress; ?></td> 
                      </tr>
                      <tr>
                        <th>Email</th>
                        <th> : </th>
                        <td><?=$id->userEmail; ?></td>
                      </tr>
                    
                <?php
                  }
                ?> 

                 
                    </tbody>
                  </table>             
              </div>
            </div>    
          </div>
        </div>
      </div>
    </div>
     
