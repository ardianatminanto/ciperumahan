<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function index()
	{
		if (!$this->session->userdata('login'))
		{
			redirect('/login');
		}
		else if ($this->session->userdata('previlege') == 1) 
		{
			$this->admin_home();
		}
	}

	private function admin_home()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin_home', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */