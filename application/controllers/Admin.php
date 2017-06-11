<?php 

if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Admin extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper(array('url'));
		$this->load->model('User');
		$this->load->library('form_validation');
		$this->load->library('grocery_CRUD');
		
		
		date_default_timezone_set("America/Guayaquil");
	}

	public function index(){
		if ($this->AdminSecurityCheck()){
            $dataHeader['PageTitle'] = "";

            $data['header'] = $this->load->view('admin/header', $dataHeader);
            $data['menu'] = $this->load->view('admin/menu', array());

            $data['contenido'] = $this->load->view('admin/index', array());
            $data['footer'] = $this->load->view('admin/footer-gc', array());
		}else{
			redirect("admin/login");
		}
	}

	public function login(){
		if ($this->AdminSecurityCheck()){
			 redirect("admin/index");
		}else{
			$dataHeader['PageTitle'] = "";

			$data['header'] = $this->load->view('admin/header', $dataHeader);
			$data['contenido'] = $this->load->view('admin/login', array());
			$data['footer'] = $this->load->view('admin/footer', array());
		}
	}

	public function logout(){
		if ($this->AdminSecurityCheck()){
			$userAdmin = new User();
			$userAdmin->logout();
			redirect("admin/login");
		}else{
			redirect("admin/login");
		}
	}

	public function authenticate(){
		$username = $this->input->post("ra_username");
		$password = $this->input->post("ra_password");

		$userAdmin = new User();

		$userAdmin->login($username, $password);

		if ($this->session->userdata) {
            redirect("admin/index");
        }else{
            redirect("admin/logout");
        }
	}


	/* CRUD Starts*/

	public function users(){
		$debug = false;

		if ($this->AdminSecurityCheck()){
            $titulo = "Usuarios";

            $crud = new grocery_CRUD();
			$crud->set_table("user");
			$crud->set_subject( $titulo );

			$crud->display_as( 'name' , 'Nombres' );
			$crud->display_as( 'last_name' , 'Apellidos' );
			$crud->display_as( 'username' , 'Usuario' );
			$crud->display_as( 'email' , 'Correo' );
			$crud->display_as( 'password' , 'Contraseña' );
			$crud->display_as( 'id_group' , 'Grupo de usuario' );

			$crud->callback_edit_field('password',array($this,'set_password_input_to_empty'));
            $crud->callback_add_field('password',array($this,'set_password_input_to_empty'));

            $crud->field_type('password','password');
            $crud->set_relation('id_group', 'rbac_group', 'name');

            $crud->callback_before_update(array($this,'encrypt_pw'));
            $crud->callback_before_insert(array($this,'encrypt_pw'));

			$crud->columns( 'name', 'last_name', 'username', 'email', 'id_group' );
			$crud->fields( 'name', 'last_name', 'username', 'email', 'password', 'id_group');
			$crud->required_fields( 'name', 'last_name', 'username', 'email', 'id_group');

			$crud->unset_print();
			$crud->unset_read();

			$output = $crud->render();

			$dataHeader['PageTitle'] = $titulo;
			$dataHeader['css_files'] = $output->css_files;
			$dataFooter['js_files'] = $output->js_files;
			$dataContent['debug'] = $debug;

            $data['header'] = $this->load->view('admin/header', $dataHeader);
			$data['menu'] = $this->load->view('admin/menu', $dataHeader );

			$data['content'] = $this->load->view('admin/blank', $output);
			$data['footer'] = $this->load->view('admin/footer-gc', $dataFooter);
		}else{
			redirect("admin/login");
		}
	}

	/* CRUD Ends*/
	/* Helpers*/
	function AdminSecurityCheck(){
		$User = new User();
		$user = $this->session->userdata('Group');
		if ($user){
			if($user == 1){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	function encrypt_pw($post_array, $pk) {
		if(!empty($post_array['password'])) {
            $post_array['password'] = md5($post_array['password']);
        }else{
        	unset($post_array['password']);
        }
        return $post_array;
	}

	function set_password_input_to_empty() {
		return "<input type='password' name='password' value='' />";
	}
}

?>