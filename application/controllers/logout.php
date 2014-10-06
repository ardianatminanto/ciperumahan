<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller 
{
	public function index()
	{
		if ($this->session->userdata('login')) 
		{
			$this->session->unset_userdata('login');
		 	$this->session->sess_destroy();
		 	redirect('login');
		}
		else
		{
			redirect('/dashboard', 'refresh');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */