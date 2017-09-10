<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authentication extends CI_Controller {

	
	//load the login file 
	public function login()
	{
		$this->load->helper('url');

		$this->load->view('authentication/login');
	}

	

}
