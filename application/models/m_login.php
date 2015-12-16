<!-- /**********************************************************************************************************************
*File Name                       : m_login.php
*Description                     : Function : 
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 7th September 2015
*Version                         :
*Modification Log                :
*Function List                   :
***********************************************************************************************************************/ -->


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_login extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_login($usr, $pwd)
     {
           $sql = "select * from user_detail where username = '" . $usr . "' and password = '" . md5($pwd) . "' and status = 'active'";
           $query = $this->db->query($sql);
           
          if($query->num_rows() > 0) {
           
           return $query->num_rows();
                }
     }
}

/**********************************************************************************************************************
* End of m_login.php
***********************************************************************************************************************/
?>