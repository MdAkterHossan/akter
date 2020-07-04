<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		// $this->load->model(array('welcome_model','websiteEdit_model','customer_register_model'));
	}

	public function index()
	{
		$this->load->view('welcome_message');
		$this->load->view('header_view');
	}
}
