<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct(){

		parent::__construct();

		$this->load->model('m_test');
	}

	// public function index()
	//{
		//echo 'ini index test';
		//$this->load->view('welcome_message');
	//}

	//	public function test1()
	//{

		//echo 'ini index test 1';

	//$p['camp1']=	$this->m_test->test1();

    //  $d['content']=$this->load->view('test/v_test',$p);
        

	//	$this->load->view('v_template',$d);
	//}


      public function test2()
      {


		$this->load->view('v_template');

		}
}
