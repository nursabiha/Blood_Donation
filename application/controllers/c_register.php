<!-- /**********************************************************************************************************************
*FIle Name                       : c_register.php
*Description                     : To create, read, update and delete user profile
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 9th September 2015
*Version		                 : 1.0
*Modification Log                :
*Function List					 :
***********************************************************************************************************************/ -->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_register extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('m_register');
		session_start();
	}

	public function index() {

	}


/**********************************************************************************************************************
*Description                     : Function : add user to register
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 10th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	public function add_register() 
	{
		$data['user']=$this->m_register->view_register();
		$a['connect']=$this->load->view('regist/v_add_register',$data,true);
		$this->load->view('template/v_template',$a);
	}

/**********************************************************************************************************************
*Description                     : Function : view_userdetail()
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 9th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	public function check_register() 
	{
		$data = array(
            'id_user'		=> $this->input->post('id_user'),
            'userName'		=> $this->input->post('userName'),
            'userIc'	    => $this->input->post('userIc'),
            'genderType'    => $this->input->post('genderType'),
            'bloodType'     => $this->input->post('bloodType'),
            'rhType'        => $this->input->post('rhType'),
            'userAddress'   => $this->input->post('userAddress'),
            'userPhone'     => $this->input->post('userPhone'),
            'userEmail'     => $this->input->post('userEmail'),
        	);
		
		// data.sort();

		$success = $this->m_register->check_register($this->input->post('userIc'));
       if($success == 0)
       {
       		$dataInsert = $this->m_register->add_register($data);
       		if($dataInsert == 1)
			{
        		// $data['blood']=$this->m_register->get_blood();
        		// $data['user_rh']=$this->m_register->get_rh();
        		// $data['user_gender']=$this->m_register->get_gender();
        		$data['user']=$this->m_register->view_register();

        		$a['connect']=$this->load->view('regist/v_view_register',$data,true);
				$this->load->view('template/v_template',$a);
			}
			else {
				echo 'no no no';
			}
       }
       else
       {
         $data['user']=$this->m_register->view_register();

        		$a['connect']=$this->load->view('regist/v_view_register',$data,true);
				$this->load->view('template/v_template',$a);
       }
	}
	

/**********************************************************************************************************************
*Description                     : Function : view_userdetail()
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 22th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	public function view_register($id_user) 
	{
	
        		$id_user = $this->uri->segment(3,0);

				$data['user'] = $this->m_register->get_register($id_user);
				$a['connect']=$this->load->view('regist/v_view_registerdetail',$data,true);
				$this->load->view('template/v_template',$a);
        }


/**********************************************************************************************************************
*Description                     : Function : to delete user detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 13th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	public function delete_register($data)
	{
			$getid = $this->input->get('id_user');
			$success = $this->m_register->delete_register($data);
			if($success == 0)
			{
				$data['user'] = $this->m_register->view_register($getid);
				$dataContent['connect'] = $this->load->view('regist/v_view_register',$data,true);
				$this->load->view('template/v_template', $dataContent);
			}
			else
			{
				echo'sikit je lagi';
			}		
	}

/**********************************************************************************************************************
*Description                     : Function : to edit and update the user detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 13th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/
		
	public function update_register()
	{
		$data = array(
            'id_user'		=> $this->input->post('id_user'),
            'userName'		=> $this->input->post('userName'),
            'userIc'	    => $this->input->post('userIc'),
            'genderType'    => $this->input->post('genderType'),
            'bloodType'     => $this->input->post('bloodType'),
            'rhType'        => $this->input->post('rhType'),
            'userAddress'   => $this->input->post('userAddress'),
            'userEmail'     => $this->input->post('userEmail'),
        	);

		$id_user = $this->input->post('id_user');
		$success = $this->m_register->update_register($id_user,$data);
	
		if($success == 1)
        {
        	$data['user']=$this->m_register->view_register();
        	$dataContent['connect']=$this->load->view('regist/v_view_register',$data,true);
        	$this->load->view('template/v_template', $dataContent);
        }
        else
        {
        	echo 'harap maaf yer';
        }
	}
	
	public function edit_register($id_user)
	{
		$id_user = $this->uri->segment(3,0);
		$data['user'] = $this->m_register->get_register($id_user);
		//$data['blood']=$this->m_register->get_blood();
  		//$data['user_rh']=$this->m_register->get_rh();
  		//$data['user_gender']=$this->m_register->get_gender();
		$dataContent['connect'] = $this->load->view('regist/v_update_register',$data,true);
		$this->load->view('template/v_template', $dataContent);
		
		$this->data['this'] = 'Edit Register';
	}

}

/**********************************************************************************************************************
* End of c_register.php
***********************************************************************************************************************/