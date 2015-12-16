<!-- /**********************************************************************************************************************
*File Name                       : c_admin.php
*Description                     : 
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 7th September 2015
*Version		                 : 1.0
*Modification Log                :
*Function List					 :
***********************************************************************************************************************/ -->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_admin extends CI_Controller {

	function __construct()
	{

		parent::__construct();

		$this->load->model('m_admin');
		session_start();
	}

	public function index() {

	}

/**********************************************************************************************************************
*Description                     : Function : to login
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 10th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	public function log_in()
	{
		$userN   = $this->input->post('userName');
		$pass    = $this->input->post('password');
		
		$success = $this->m_admin->login($userN, $pass);

		if($success == 0)
		{
			$this->load->view('login/v_loginstaf',true);
        	
		}
		else
		{
			$this->load->view('regist/v_view_register');
			
		}
	}

/**********************************************************************************************************************
*Description                     : Function : to add donation
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 9th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	public function add_donation() 
	{
       $data['donate']=$this->m_admin->view_donation();
       $data['id_user']= $this->uri->segment(3,0);
       $data['id_donation']= $this->m_admin->get_hosp();
       // $data['id_user']=$this->load->post('id_user');
       // $data['add_donation'] = 'add_donation';
       $a['connect']=$this->load->view('donate/v_add_donation',$data,true);
	   $this->load->view('template/v_template',$a);  
	}
	
/**********************************************************************************************************************
*Description                     : Function : view_donationdetail()
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 23th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function trycheck_donation() 	 // check data ada tak?
	{   
		$data = array(
            'id_donation'	  => $this->input->post('id_donation'),
            'donationDate'	  => $this->input->post('donationDate'),
            'donationSiri'    => $this->input->post('donationSiri'),
            'donationAmount'  => $this->input->post('donationAmount'),
            'id_hosp'    	  => $this->input->post('id_hosp'),
            'donationRemark'  => $this->input->post('donationRemark'),
            'id_user'  		  => $this->input->post('id_user'),
        	);
		$success = $this->m_admin->check_donation($this->input->post('donationSiri'));
		
		if($success == 0)  // go here after check
		{
			$dataInsert = $this->m_admin->add_donation($data);

			if($dataInsert == 1)
			{
				
				$id_donation = $this->uri->segment(3,0);
				$data['donate']=$this->m_admin->view_donation($this->input->post('id_hosp'));
				$data['hosp']=$this->m_admin->get_hosp();
				$data['user']=$this->m_admin->get_user();
				$donate['connect']=$this->load->view('donate/v_view_donation',$data,true);
				$this->load->view('template/v_template',$donate);
			}
			else {
				echo 'no no no';
			}
		}

       else {
        	echo 'cuba lagi';	
       }
	}


	public function view_donation($id_donation) 
	{
        $id_donation = $this->uri->segment(3,0);
		$data['donate'] = $this->m_admin->get_donat($id_donation);
		$data['hosp'] = $this->m_admin->get_hosp();
		//$data['user']=$this->m_admin->get_user();
   		$a['connect']=$this->load->view('donate/v_view_donation',$data,true);
		$this->load->view('template/v_template',$a);
    }


/**********************************************************************************************************************
*Description                     : Function : to delete donation detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 11th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	public function delete_donation($id_donation)
	{
			$getid = $this->input->get('id_donation');
			$success = $this->m_admin->delete_donation($id_donation);

		// if($success == 0)
		// {	
		// 	$del = $this->m_admin->get_donation($getid);
		// 	$dataContent['content'] = $this->load->view('v_view_donation',$del,true);
		// 		$this->load->view('template/v_template', $dataContent);
			if($success == 0)
			{
				$data['donate'] = $this->m_admin->view_donation($getid);
				$dataContent['connect'] = $this->load->view('donate/v_view_donation',$data,true);
				$this->load->view('template/v_template', $dataContent);
				//echo'berjaya';
			}
			else
			{
				echo'sikit je lagi';
			}		
	}
		

/**********************************************************************************************************************
*Description                     : Function : to update donation detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 11th September 2015
*Input Parameter                 :
*Modification Log                : 2nd November 2015
***********************************************************************************************************************/

	public function update_donation($id_donation)
	{
		
		$data = array(
            'id_donation'	  => $this->input->post('id_donation'),
            'donationDate'	  => $this->input->post('donationDate'),
            'donationSiri'    => $this->input->post('donationSiri'),
            'donationAmount'  => $this->input->post('donationAmount'),
            'id_hosp'    	  => $this->input->post('id_hosp'),
            'donationRemark'  => $this->input->post('donationRemark'),
            'id_user'  		  => $this->input->post('id_user')
        	);
		//$id_donation = $this->input->get('id_donation');
		$id_donation = $this->input->post('id_donation');
		$success = $this->m_admin->update_donation($id_donation,$data);
		if($success == 1)
        {
        	$id_donation = $this->uri->segment(3,0);
        	$data['donate']=$this->m_admin->view_donation($this->input->post('id_hosp'));
        	$data['hosp']=$this->m_admin->get_hosp();
        	$data['user']=$this->m_admin->get_user();
        	$dataContent['connect']=$this->load->view('donate/v_view_donation',$data,true);
        	$this->load->view('template/v_template', $dataContent);
        }
        else{
        	echo 'harap maaf yer';
        }
	}
	
	
	public function edit_donation($id_donation)
	{
		$id_donation = $this->uri->segment(3,0);
		$data['donate'] = $this->m_admin->get_donation($id_donation);
		$dataContent['connect'] = $this->load->view('donate/v_update_donation',$data,true);
		$this->load->view('template/v_template', $dataContent);
		
		$this->data['this'] = 'Edit Donation';
	}



/**********************************************************************************************************************
*Description                     : Function : view_donation()
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 8th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/
	function check_donation() 	 // check data ada tak?
	{   
		$data = array(
            'id_donation'	  => $this->input->post('id_donation'),
            'donationDate'	  => $this->input->post('donationDate'),
            'donationSiri'    => $this->input->post('donationSiri'),
            'donationAmount'  => $this->input->post('donationAmount'),
            'id_hosp'    	  => $this->input->post('id_hosp'),
            'donationRemark'  => $this->input->post('donationRemark'),
            'id_user'		  => $this->input->post('id_user')
        	);
		$success = $this->m_admin->check_donation($this->input->post('donationSiri'));
	
		if($success == 0)  // go here after check
		{
			$dataInsert = $this->m_admin->add_donation($data);

			if($dataInsert == 1)
			{
				$data['donate']=$this->m_admin->view_donation();
				$data['hosp']=$this->m_admin->get_hosp();
				$data['user']=$this->m_admin->get_user();
				$donate['connect']=$this->load->view('donate/v_view_donation',$data,true);
				$this->load->view('template/v_template',$donate);
			}
			else
			{
				echo 'no no no';
			}
		}

       else
       {
        	//echo 'cuba lagi';
        	$data['donate']=$this->m_admin->view_donation();
			$donate['connect']=$this->load->view('donate/v_view_donation',$data,true);
			$this->load->view('template/v_template',$donate);
			// $this->load->view('v_view_donation');
			// $this->load->view('template/v_template',$donate); 	
       }
	}

}

/**********************************************************************************************************************
* End of c_admin.php
***********************************************************************************************************************/