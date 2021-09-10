<?php  if(!defined('BASEPATH')) Exit ('No Direct script access allowed');
class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();	
		$this->load->database();
	}
	
	public function add_user($datanew) 
	{
		return $this->db->insert('users', $datanew);
	}

	public function get_users()
	{
		$query = $this->db->get('users');
		return $query->result();
	}
    
}