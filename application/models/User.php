<?php 
if( !defined('BASEPATH')) exit ("No direct script access allowed");

class User extends CI_Model{
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
		$res = $this->db->get_where("user", array('username' => $username, 'password' => md5($password)))->row();

		if($res){
			return true;
		}else{
			return false;
		}
	}

	//Get rbac group for user
	function getGroup($username){
		$this->db->select('id_group');
		$this->db->from('user');
		$this->db->where('username', $username);

		$query = $this->db->get()->result_array();
		$res = $query[0]['id_group'];

		return $res;
	}

	//Returns email for user
	function getMail($username){
		$this->db->select('email');
		$this->db->from('user');
		$this->db->where('username', $username);

		$query = $this->db->get()->result_array();
		$res = $query[0]['email'];

		return $res;
	}

	// Returns full name of user
	function getName($username){
		$this->db->select('name, last_name');
		$this->db->from('user');
		$this->db->where('username', $username);

		$query = $this->db->get()->result_array();
		$res = $query[0]['name']. " " . $query[0]['last_name'];

		return $res;
	}


	function login($username, $password){
		if ($this->verifyUser($username, $password)){
			$admin_data = array("Group" => $this->getGroup($username), "Mail" => $this->getMail($username), "Name" => $this->getName($username));
			$this->session->set_userdata($admin_data);
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