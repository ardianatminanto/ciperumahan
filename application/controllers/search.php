<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller 
{
	public function index()
	{
		if (!$this->session->userdata('login')) 
		{
			redirect('/login');
		}
		if (isset($_POST['kategori']) || isset($_POST['kunci']))
		{
			echo "haha";
			$this->load->model('perumahan_model');
			$result = $this->perumahan_model->get_perumahan($_POST['kategori'], $_POST['kunci']);
			$data['perumahan'] = $result;
			$data['iscontain'] = TRUE;
			$data['username'] = $this->session->userdata('username');
			$this->load->view('searching', $data);
		}
		else
		{
			echo "hehe";
			$data['username'] = $this->session->userdata('username');
			$data['perumahan'] = NULL;
			$data['iscontain'] = FALSE;
			$this->load->view('searching', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */