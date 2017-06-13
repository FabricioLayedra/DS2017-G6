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
            redirect("web/user");
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

	public function user(){
		if ($this->UserSecurityCheck()){
			$dataHeader['PageTitle'] = "Restaurantes";

			$category_list = Category::getCategories();

			foreach ($category_list as $index => $rest_list) {
				$RestaurantCat[$rest_list['id_category']] = Dish::getDishByCategory($rest_list['id_category']);
			}

			$dataContent['categorias'] = $category_list;
			$dataContent['restaurantes'] =$RestaurantCat;
	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/client', $dataContent);
	        $data['footer'] = $this->load->view('web/footer', array());
	    }else{
	    	redirect('web/index');
	    }
	}

	public function assistant(){
		if ($this->AssistantSecurityCheck()){
			$dataHeader['PageTitle'] = "Asistente de Restaurante";

			$category_list = Category::getCategories();

			foreach ($category_list as $index => $rest_list) {
				$RestaurantCat[$rest_list['id_category']] = Dish::getDishByCategory($rest_list['id_category']);
			}

			$asociados = Restaurant::getRestaurantByAssistant($this->session->userdata('ID'));

			$dataContent['categorias'] = $category_list;
			$dataContent['restaurantes'] =$RestaurantCat;
			$dataContent['asociados'] = $asociados;

	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/assistant', $dataContent);
	        $data['footer'] = $this->load->view('web/footer', array());
	    }else{
	    	redirect('web/index');
	    }
	}

	public function dish(){

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

				if ($this->CheckRestaurantAssistant($id_restaurant)){
					$platillo_obj = Dish::getDishAssistant($id_restaurant, $id_platillo);

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
			}else{
				redirect('web/index');
			}
	  	}
	}

	public function editDish(){
		if ($this->AssistantSecurityCheck()){

			$id_platillo = $this->uri->segment(3);

			if($this->CheckDishAssistant($id_platillo)){

				$platillo_obj = Dish::getDishById($id_platillo);
				$data_content['platillo'] = $platillo_obj;

				$dataHeader['PageTitle'] = "Editar";

		        $data['header'] = $this->load->view('web/header', $dataHeader);
		        $data['menu'] = $this->load->view('web/menu', array());

		        $data['contenido'] = $this->load->view('web/agregarPlatillo', $data_content);
		        $data['footer'] = $this->load->view('web/footer', array());
			}else{
				redirect('web/index');
			}
	    }else{
	    	redirect('web/index');
	    }
	}


	public function restaurantes(){

		$restaurantes = Restaurant::getRestaurants();

		$dataContent['restaurantes']= $restaurantes;
		
		$dataHeader['PageTitle'] = "Restaurantes";	

        $data['header'] = $this->load->view('web/header', $dataHeader);
        $data['menu'] = $this->load->view('web/menu', array());

        $data['contenido'] = $this->load->view('web/restaurantes', $dataContent);
        $data['footer'] = $this->load->view('web/footer', array());
	    
	  }

	public function addPlate(){
		if ($this->AssistantSecurityCheck()){
			$category_list = Category::getCategories();
			$type_list = Type::getTypes();
			$asociados = Restaurant::getRestaurantByAssistant($this->session->userdata('ID'));

			$dataHeader['PageTitle'] = "Agregar ";

			$data_content['categorias'] = $category_list;
			$data_content['tipos'] = $type_list;
			$data_content['asociados'] = $asociados;

	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/agregarPlatillo', $data_content);
	        $data['footer'] = $this->load->view('web/footer', array());
	    }else{
	    	redirect('web/index');
	    }
	  }

	public function signup(){

			$dataHeader['PageTitle'] = "Crea tu cuenta";

	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/singup', array());
	        $data['footer'] = $this->load->view('web/footer', array());

	  }

	/* FORM UPLOADS*/

	public function newdish(){
		//Start upload config
		$config['upload_path']          = 'assets/uploads/dishes/';
        $config['allowed_types']        = 'gif|jpeg|jpg|png|tiff';
        $config['max_size']             = 2048;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['encrypt_name']			= TRUE;
        $config['remove_spaces']		= TRUE;
        $config['detect_mime']			= TRUE;
        //End config upload

        $foto = "";

        $name = $this->input->post("dish-name");
		$restaurant = $this->input->post("dish-res");
		$descripcion = $this->input->post("dish-description");
		$ingredient = $this->input->post("dish-ingredient");
		$temp = $this->input->post("dish-servido");
		$id_category = $this->input->post("dish-cat");
		$id_type = $this->input->post("dish-type");

        $this->load->library('upload', $config);

		if($this->upload->do_upload("dish-imagen")) {
            $img_data = $this->upload->data();
            $foto = $img_data["file_name"];
        }
        $data = array(
        	'id_restaurant'=>$restaurant,
			'name'=>$name,
			'descripcion'=>$descripcion,
			'ingredient'=>$ingredient,
			'temp'=>$temp,
			'img'=>$foto,
			'id_category'=>$id_category,
			'id_type'=>$id_type
        	);

		$this->db->insert('dish', $data);
        $id_dish = $this->db->insert_id();

		
        redirect("web/dish/".$restaurant.'/'.$id_dish);
	}

	public function newUser(){
		$name = $this->input->post("ra_name");
		$last_name = $this->input->post("ra_lastname");
		$username = $this->input->post("ra_username");
		$email = $this->input->post("ra_mail");
		$password = $this->input->post("ra_password");

		$data = array(
			'name' => $name,
			'last_name' => $last_name,
			'username' => $username,
			'email' => $email,
			'password' => md5($password),
			'id_group' => 3);

		$this->db->insert('user', $data);
		$id_user = $this->db->insert_id();
		redirect("web/login");

	}

	 /* Helpers*/
	function UserSecurityCheck(){
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

	function CheckRestaurantAssistant($id_restaurant){
		$user = $this->session->userdata('ID');
		if ($user && !is_null($id_restaurant)){
			$this->db->select('restaurant_assistants.id_restaurant');
			$this->db->from('restaurant_assistants');
			$this->db->where('restaurant_assistants.id_user', $user);

			$restaurants = $this->db->get()->result_array();

			foreach ($restaurants as $res){
				if($res['id_restaurant'] == $id_restaurant){
					return true;
				}
			}
			return false;
		}else{
			return false;
		}
	}

	function CheckDishAssistant($id_dish){
		$user = $this->session->userdata('ID');
		if ($user && !is_null($id_dish)){
			$this->db->select('restaurant_assistants.id_user');
			$this->db->from('restaurant_assistants');
			$this->db->join('dish', 'dish.id_restaurant = restaurant_assistants.id_restaurant');
			$this->db->where('dish.id_dish', $id_dish);

			$restaurants = $this->db->get()->result_array();

			foreach ($restaurants as $res){
				if($res['id_user'] == $user){
					return true;
				}
			}
			return false;
		}else{
			return false;
		}
	}

	function SecurityCheck(){
		$user = $this->session->userdata('Mail');
		if ($user){
			return True;
		}else{
			return false;
		}
	}
}

?>
