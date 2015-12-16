<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class c_login extends CI_Controller{
/**********************************************************************************************************************************
* Author            : Nur Sabiha binti Abdul Samad
* Date              : 4th Sept 2015
* Function List     : function __construct(), ..
**********************************************************************************************************************************/
        public function __construct()
    {
         parent::__construct();
         //load the login model
         $this->load->model('m_login');
    }
/**********************************************************************************************************************************
*End of function __construct(), ..
**********************************************************************************************************************************/

/**********************************************************************************************************************************
* Author            : Nur Sabiha binti Abdul Samad
* Date              : 4th Sept 2015
* Function List     : function index(), ..
**********************************************************************************************************************************/

           public function log_index()
    {
         //get the posted values
         $username = $this->input->post("Username1");
         $password = $this->input->post("Password1");

         //set validations
         $this->form_validation->set_rules('Username1', 'tidak ada usernama', 'required');
         $this->form_validation->set_rules('Password1', 'mana password', 'required');

         if ($this->form_validation->run() == FALSE)
    {    //validation fails
         //echo validation_errors(); 
         $this->load->view('v_login');
    }
         else
    {    //validation succeeds
         if ($this->input->post('btn_login') == "Login")
    {
         //check if username and password is correct
         $usr_result = $this->m_login->get_login($usr, $pwd);
         if ($usr_result > 0) //active user record is present
    {    //set the session variables
         $sessiondata = array(
            'username' => $username,
            'loginuser' => TRUE,
            'id_user'=>$usr_result[0]->id_user, 
            'role'=>$usr_result[0]->id_role,);
         $this->session->set_userdata($sessiondata);
         redirect("c_admin/view_register");

         // print_r( $sessiondata);
         // die('1');
    }
         else
    {
         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
         redirect('login/index');
         // die('2');
    }
    }
    else
    {    //  redirect('login/index');
         // die('3');
               }
          }
     }
/**********************************************************************************************************************************
*End of function index
**********************************************************************************************************************************/
}?>
