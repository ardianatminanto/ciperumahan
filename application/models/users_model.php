<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	function check_login($username, $password)
	{
		$password = md5($password);
		$query = $this->db->query("SELECT * from users WHERE username='$username' AND password='$password'");
		return $query->result();
	}
}