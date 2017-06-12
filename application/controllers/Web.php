<?php

if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Web extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper(array('url'));
		$this->load->library('form_validation');
		$this->load->model('User');
		$this->load->model('Type');
		$this->load->model('Category');
		$this->load->model('Dish');
		$this->load->model('Restaurant');

		date_default_timezone_set("America/Guayaquil");
	}

	public function login(){
		if ($this->SecurityCheck()){
			 redirect("web/index");
		}else{
			$dataHeader['PageTitle'] = "";

			$data['header'] = $this->load->view('web/header', $dataHeader);
        	$data['menu'] = $this->load->view('web/menu', array());

        	$data['contenido'] = $this->load->view('web/login', array());
        	$data['footer'] = $this->load->view('web/footer', array());
		}
	}

	public function authenticate(){
		$username = $this->input->post("ra_username");
		$password = $this->input->post("ra_password");

		$userAdmin = new User();

		$userAdmin->login($username, $password);

		$user = $this->session->userdata('Group');
		if ($user){
			if ($user == 3) {
            redirect("web/client");
	        }else{
	        	if ($user == 2){
	        		redirect("web/assistant");
	        	}else{
	        		if ($user == 1){
	        			 redirect("admin/logout");
	        		}
	        	}
			}
		}else{
			redirect("web/login");
		}
	}

	public function logout(){
		if ($this->SecurityCheck()){
			$userAdmin = new User();
			$userAdmin->logout();
			redirect("web/login");
		}else{
			redirect("web/login");
		}
	}


	public function index(){

		$dataHeader['PageTitle'] = "Bienvenidos";

        $data['header'] = $this->load->view('web/header', $dataHeader);
        $data['menu'] = $this->load->view('web/menu', array());

        $data['contenido'] = $this->load->view('web/index', array());
        $data['footer'] = $this->load->view('web/footer', array());

    }

	public function client(){
		if ($this->UserSecurityCheck()){
			$dataHeader['PageTitle'] = "";

	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/client', array());
	        $data['footer'] = $this->load->view('web/footer', array());
	    }else{
	    	redirect('web/index');
	    }
	  }

	public function plates(){

		if ($this->UserSecurityCheck()){
			$dataHeader['PageTitle'] = "Platillo";

			$id_platillo = $this->uri->segment(3);

			$platillo_obj = Dish::getDishById($id_platillo);

			if (!is_null($platillo_obj)){
				$data_content['platillo'] = $platillo_obj;

				$data['header'] = $this->load->view('web/header', $dataHeader);
		        $data['menu'] = $this->load->view('web/menu', array());

		        $data['contenido'] = $this->load->view('web/plates', $data_content);
		        $data['footer'] = $this->load->view('web/footer', array());
			}else{
				redirect('web/index');
			}
		}else{
			if ($this->AssistantSecurityCheck()){
				$dataHeader['PageTitle'] = "Platillo";

				$id_restaurant = $this->uri->segment(3);
				$id_platillo = $this->uri->segment(4);

				$platillo_obj = Dish::getDishAssistant($id_restaurant, $id_restaurant);

				if (!is_null($platillo_obj)){
					$data_content['platillo'] = $platillo_obj;

					$data['header'] = $this->load->view('web/header', $dataHeader);
			        $data['menu'] = $this->load->view('web/menu', array());

			        $data['contenido'] = $this->load->view('web/plates', $data_content);
			        $data['footer'] = $this->load->view('web/footer', array());
				}else{
					redirect('web/index');
				}

			}else{
				redirect('web/index');
			}
	  	}
	}


	public function assistant(){
		if ($this->AssistantSecurityCheck()){
			$dataHeader['PageTitle'] = "";

	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/assistant', array());
	        $data['footer'] = $this->load->view('web/footer', array());
	    }else{
	    	redirect('web/index');
	    }
	  }

	public function restaurantes(){

			$dataHeader['PageTitle'] = "";

	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/restaurantes', array());
	        $data['footer'] = $this->load->view('web/footer', array());

	  }

	public function agregarPlatillo(){

			$dataHeader['PageTitle'] = "";

	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/agregarPlatillo', array());
	        $data['footer'] = $this->load->view('web/footer', array());

	  }

		public function singup(){

				$dataHeader['PageTitle'] = "";

		        $data['header'] = $this->load->view('web/header', $dataHeader);
		        $data['menu'] = $this->load->view('web/menu', array());

		        $data['contenido'] = $this->load->view('web/singup', array());
		        $data['footer'] = $this->load->view('web/footer', array());

		  }


	 /* Helpers*/
	function UserSecurityCheck(){
		$User = new User();
		$user = $this->session->userdata('Group');
		if ($user){
			if($user == 3){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	function AssistantSecurityCheck(){
		$User = new User();
		$user = $this->session->userdata('Group');
		if ($user){
			if($user == 2){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

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

	function SecurityCheck(){
		$User = new User();
		$user = $this->session->userdata('Mail');
		if ($user){
			return True;
		}else{
			return false;
		}
	}
}

?>
