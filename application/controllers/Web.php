<?php

if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Web extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper(array('url'));
		$this->load->library('form_validation');


		date_default_timezone_set("America/Guayaquil");
	}


	public function index(){

		$dataHeader['PageTitle'] = "";

        $data['header'] = $this->load->view('web/header', $dataHeader);
        $data['menu'] = $this->load->view('web/menu', array());

        $data['contenido'] = $this->load->view('web/index', array());
        $data['footer'] = $this->load->view('web/footer', array());

    }

	public function login(){

		$dataHeader['PageTitle'] = "";

        $data['header'] = $this->load->view('web/header', $dataHeader);
        $data['menu'] = $this->load->view('web/menu', array());

        $data['contenido'] = $this->load->view('web/login', array());
        $data['footer'] = $this->load->view('web/footer', array());

	  }

		public function client(){

			$dataHeader['PageTitle'] = "";

	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/client', array());
	        $data['footer'] = $this->load->view('web/footer', array());

	  }

		public function plates(){

			$dataHeader['PageTitle'] = "";

	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/plates', array());
	        $data['footer'] = $this->load->view('web/footer', array());

	  }


		public function assistant(){

			$dataHeader['PageTitle'] = "";

	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/assistant', array());
	        $data['footer'] = $this->load->view('web/footer', array());

	  }

		public function restaurante(){

			$dataHeader['PageTitle'] = "";

	        $data['header'] = $this->load->view('web/header', $dataHeader);
	        $data['menu'] = $this->load->view('web/menu', array());

	        $data['contenido'] = $this->load->view('web/restaurantes', array());
	        $data['footer'] = $this->load->view('web/footer', array());

	  }

}

?>
