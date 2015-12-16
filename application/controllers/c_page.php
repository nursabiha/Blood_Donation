<!--**********************************************************************************************************************
*File Name                       : c.page.php
*Description                     : 
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 26th November 2015
*Version                         :
*Modification Log                :
*Function List                   : 
***********************************************************************************************************************-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_page');
       
        session_start();
	}

	public function index() {

	}
/**********************************************************************************************************************
*Description                     : Global front page before login into the system
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 25th November 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	public function frontpage() 
	{
		$data[]=$this->m_page->view_frontpage();
		$a['connectfront']=$this->load->view('homepage/v_frontpage',$data,true);
		$this->load->view('template/v_frontemplate',$a);

	}


/**********************************************************************************************************************
*Description                     : Function : to add note
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 26th November 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	public function add_note() 
	{
		$data = array(
            'id_note'	  => $this->input->post('id_note'),
            'noteTitle'	  => $this->input->post('noteTitle'),
            'noteText'    => $this->input->post('noteText'),
        	);
		

		$data['note']=$this->m_page->add_note($data);
		$a['connect']=$this->load->view('note/v_add_note',$data,true);
		$this->load->view('template/v_template',$a);
	}


/**********************************************************************************************************************
*Description                     : Function : to check wether data enter has been keep in database or not 
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 26th November 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function check_note() 	 // check data ada tak?
	{   
		$data = array(
            'id_note'	  => $this->input->post('id_note'),
            'noteTitle'	  => $this->input->post('noteTitle'),
            'noteText'    => $this->input->post('noteText'),
        	);
		$success = $this->m_page->check_note($this->input->post('id_note'));
		
		if($success == 0)  // go here after check
		{
			$dataInsert = $this->m_page->add_note($data);

			if($dataInsert == 1)
			{
				
				$id_note = $this->uri->segment(3,0);
				$data['note']=$this->m_page->view_note();
				$donate['connect']=$this->load->view('note/v_note',$data,true);
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

/**********************************************************************************************************************
*Description                     : Function : to view note
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 9th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	public function view_note() 
	{
		$data[]=$this->m_page->view_note();
		$a['connect']=$this->load->view('note/v_view_note',$data,true);
		$this->load->view('template/v_template',$a);
	}


/**********************************************************************************************************************
*Description                     : Function : to view dashboard
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 9th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/


	public function view_homepage() 
	{
		$data[]=$this->m_page->view_dashboard();
		$a['connect']=$this->load->view('homepage/v_homepage',$data,true);
		$this->load->view('template/v_template',$a);
	}



/**********************************************************************************************************************
*Description                     : Function : to view tab functioning
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 11th Novemner 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

public function view_tab() 
	{
		$data[]=$this->m_page->view_note();
		$a['connect']=$this->load->view('note/v_tab',$data,true);
		$this->load->view('template/v_template',$a);
	}



}
?>