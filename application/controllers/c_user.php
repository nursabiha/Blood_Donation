<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_user extends CI_Controller {

	function __construct(){

		parent::__construct();

		$this->load->model('m_user');
		session_start();
	}

/**********************************************************************************************************************
*Description                     : Function : to login
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 17th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	public function log_in()
	{
		$userN   = $this->input->post('userName');
		$pass    = $this->input->post('password');
		
		$success = $this->m_user->login($userN, $pass);

		if($success == 0)
		{
			$this->load->view('v_login',true);
        	
		}
		else
		{
			$this->load->view('v_view_register');
			
		}
	}

	// public function view_userdetail() {

	// 	$data['user1']=$this->m_user->view_userdetail();
	// 	$a['connect']=$this->load->view('v_view_register',$data,true);
	// 	$this->load->view('template/v_template',$a);
	// }
}