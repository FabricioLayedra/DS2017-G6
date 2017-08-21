<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper(array('url'));
		$this->load->library('form_validation');
        $this->load->database();

        date_default_timezone_set("America/Guayaquil");
        header('Access-Control-Allow-Origin: *'); 
        setlocale(LC_TIME, 'spanish');
    }

    public function index() {
        redirect("web/index");
    }

    public function getLunches(){

        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');

        $this->db->select('restaurant.id_restaurant, restaurant.name, restaurant.has_online');
        $this->db->from('restaurant');
        $this->db->where('restaurant.has_lunch', 1);
        $consulta = $this->db->get()->result_array();

        $resultado = array();

        foreach ($consulta as $row) {
            $id_restaurant = $row['id_restaurant'];

            $this->db->select("lunch.id_lunch, lunch.id_restaurant");
            $this->db->from('lunch');
            $this->db->where('lunch.id_restaurant', $id_restaurant);
            $this->db->where('lunch.date', $curr_date);
            $lunch = $this->db->get()->row_array();

            if(!is_null($lunch)){
                $id_lunch = $lunch['id_lunch'];

                $this->db->select("lunch_plates.id_plate, plates.name, lunch_plates.is_executive, plates.type");
                $this->db->from('lunch_plates');
                $this->db->join('plates', 'plates.id_plate = lunch_plates.id_plate');
                $this->db->where('lunch_plates.id_lunch', $id_lunch);
                $plates = $this->db->get()->result_array();

                $row_array['restaurant'] = $row;
                $row_array['plates'] = $plates;

                array_push($resultado, $row_array);
            }
        }


        header('Content-type: application/json');
        echo json_encode($resultado);
    }

}

?>
