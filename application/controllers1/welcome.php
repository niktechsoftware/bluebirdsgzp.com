<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function aboutUs()
	{
		$this->load->view('aboutUs');
	}
	public function vision()
	{
		$this->load->view('vision');
	}
	
	public function gallery()
	{
		$this->load->view('gallery');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */