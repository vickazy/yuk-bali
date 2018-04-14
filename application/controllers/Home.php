<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('settings/bootstrap');
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('home');
		$this->load->view('footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */