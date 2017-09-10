<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data = array('content'=>'dashboard/dashboard');
		
		$this->load->helper('url');
	    $this->load->view('share/header');
		$this->load->view('share/layout',$data);
		$this->load->view('share/footer');
	}

	public function header()
	{
	 	echo "hello world";
	}

}
