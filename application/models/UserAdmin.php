<?php 
if( !defined('BASEPATH')) exit ("No direct script access allowed");

class UserAdmin extends CI_Model{
	private $username;
	private $email;
	private $name;
	private $lastname;
	private $status;

	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	//Verify if user password combination exists
	function verifyUser($username, $password){
		$res = $this->db->get_where("admin", array('username' => $username, 'password' => md5($password)))->row();

		if($res){
			return true;
		}else{
			return false;
		}
	}

	//Get rbac group for admin user
	function getGroup($username){
		$this->db->select('rbac_admin_group.id_group');
		$this->db->from('rbac_admin_group');
		$this->db->join('admin', 'admin.id_admin = rbac_admin_group.id_admin');
		$this->db->where('admin.username', $username);

		$query = $this->db->get()->result_array();
		$res = $query[0]['id_group'];

		return $res;
	}

	//Returns email for admin user
	function getMail($username){
		$this->db->select('email');
		$this->db->from('admin');
		$this->db->where('username', $username);

		$query = $this->db->get()->result_array();
		$res = $query[0]['email'];

		return $res;
	}

	// Returns full name of admin user
	function getName($username){
		$this->db->select('name, last_name');
		$this->db->from('admin');
		$this->db->where('username', $username);

		$query = $this->db->get()->result_array();
		$res = $query[0]['name']. " " . $query[0]['last_name'];

		return $res;
	}


	function login($username, $password){
		if ($this->verifyUser($username, $password)){
			$admin_data = array("Group" => $this->getGroup($username), "Mail" => $this->getMail($username), "Name" => $this->getName($username));
			$this->session->set_userdata($admin_data);
			//print_r($admin_data);
			return true;
		} else {
			return false;
		}
	}

	function logout(){
		$this->session->sess_destroy();
	}

}
?>