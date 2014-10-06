<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller 
{
	public function index()
	{
		if ($this->session->set_userdata('login')) 
		{
			redirect('/dashboard');
		}
		else if (isset($_POST['username']) && isset($_POST['password']))
		{
			$this->load->model('users_model');
			$result = $this->users_model->check_login($_POST['username'], $_POST['password']);

			if (count($result) > 0)
			{
				foreach ($result as $obj)
				{
					$session_var = array(
						'username' => $obj->username,
						'nama' => $obj->nama,
						'previlege' => $obj->previlege,
						'login' => 1
					);
				}

				$this->session->set_userdata($session_var);
				redirect('/dashboard');
			}
			else
			{
				$this->session->set_flashdata('loginStatus', 'FAILED');
				redirect('/login', 'refresh');
			}
		}
		else redirect('/login');
	}
}