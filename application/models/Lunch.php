<?php 
if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Lunch extends CI_Model{
	private $id;
	private $day;
	private $restaurant;
	private $soups;
	private $seconds;
	private $drink;
	private $dessert;
	private $exc_soup;
	private $exc_second;

	function __construct() {
		parent::__construct();
        $this->load->database();

        // Helpers
        $this->load->helper('array');
        // Required models
        $this->load->model('Plate');
        $this->load->model('Restaurant');
	}

	/*GETTERS AND SETTERS STARTS*/

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getDay(){
		return $this->day;
	}

	public function setDay($day){
		$this->day = $day;
	}

	public function getRestaurant(){
		return $this->restaurant;
	}

	public function setRestaurant($restaurant){
		$this->restaurant = $restaurant;
	}

	public function getSoups(){
		return $this->soups;
	}

	public function setSoups($soups){
		$this->soups = $soups;
	}

	public function getSeconds(){
		return $this->seconds;
	}

	public function setSeconds($seconds){
		$this->seconds = $seconds;
	}

	public function getDrink(){
		return $this->drink;
	}

	public function setDrink($drink){
		$this->drink = $drink;
	}

	public function getDessert(){
		return $this->dessert;
	}

	public function setDessert($dessert){
		$this->dessert = $dessert;
	}

	public function getExc_soup(){
		return $this->exc_soup;
	}

	public function setExc_soup($exc_soup){
		$this->exc_soup = $exc_soup;
	}

	public function getExc_second(){
		return $this->exc_second;
	}

	public function setExc_second($exc_second){
		$this->exc_second = $exc_second;
	}

	/*GETTERS AND SETTERS END*/

	/*MODELS GETTERS AND SETTERS*/

	public function getLunch(){
		return $this;
	}

	public function setLunch($id, $day, Restaurant $restaurant, array $soups, array $seconds, array $drink, array $dessert, array $exc_soup, array $exc_second){
		$this->setId($id);
		$this->setDay($day);
		$this->setSoups($soups);
		$this->setSeconds($seconds);
		$this->setDrink($drink);
		$this->setDessert($dessert);
		$this->setExc_soup($exc_soup);
		$this->setExc_second($exc_second);

	}

	/*DATABASE GETTING FUNCION*/

	public static function getLunchExecutive($id_lunch){
		if(!is_null($id_lunch)){
			$instance_CI =& get_instance();

			$soups = null;
			$seconds = null;
			$drinks = null;
			$desserts = null;

			$instance_CI->db->select('lunch_plates.id_plate, plates.name, lunch_plates.is_executive');
			$instance_CI->db->from('lunch_plates');
			$instance_CI->db->join('plates', 'plates.id_plate = lunch_plates.id_plate');
			$instance_CI->db->where('plates.type', 0);
			$instance_CI->db->where('lunch_plates.is_executive', 1);
			$instance_CI->db->where('lunch_plates.id_lunch', $id_lunch);
			$soups = $instance_CI->db->get()->result_array();

			$instance_CI->db->select('lunch_plates.id_plate, plates.name, lunch_plates.is_executive');
			$instance_CI->db->from('lunch_plates');
			$instance_CI->db->join('plates', 'plates.id_plate = lunch_plates.id_plate');
			$instance_CI->db->where('plates.type', 1);
			$instance_CI->db->where('lunch_plates.is_executive', 1);
			$instance_CI->db->where('lunch_plates.id_lunch', $id_lunch);
			$seconds = $instance_CI->db->get()->result_array();


			$instance_CI->db->select('lunch_plates.id_plate, plates.name, lunch_plates.is_executive');
			$instance_CI->db->from('lunch_plates');
			$instance_CI->db->join('plates', 'plates.id_plate = lunch_plates.id_plate');
			$instance_CI->db->where('plates.type', 2);
			$instance_CI->db->where('lunch_plates.id_lunch', $id_lunch);
			$drinks = $instance_CI->db->get()->result_array();

			$instance_CI->db->select('lunch_plates.id_plate, plates.name, lunch_plates.is_executive');
			$instance_CI->db->from('lunch_plates');
			$instance_CI->db->join('plates', 'plates.id_plate = lunch_plates.id_plate');
			$instance_CI->db->where('plates.type', 3);
			$instance_CI->db->where('lunch_plates.id_lunch', $id_lunch);
			$desserts = $instance_CI->db->get()->result_array();

			$resultado = array();

			array_push($resultado, $soups);
			array_push($resultado, $seconds);
			array_push($resultado, $drinks);
			array_push($resultado, $desserts);

			return $resultado;


		}else{
			return null;
		}
	}

	public static function getLunchStudent($id_lunch){
		if(!is_null($id_lunch)){
			$instance_CI =& get_instance();

			$soups = null;
			$seconds = null;

			$instance_CI->db->select('lunch_plates.id_plate, plates.name, lunch_plates.is_executive');
			$instance_CI->db->from('lunch_plates');
			$instance_CI->db->join('plates', 'plates.id_plate = lunch_plates.id_plate');
			$instance_CI->db->where('plates.type', 0);
			$instance_CI->db->where('lunch_plates.is_executive', 0);
			$instance_CI->db->where('lunch_plates.id_lunch', $id_lunch);
			$soups = $instance_CI->db->get()->result_array();

			$instance_CI->db->select('lunch_plates.id_plate, plates.name, lunch_plates.is_executive');
			$instance_CI->db->from('lunch_plates');
			$instance_CI->db->join('plates', 'plates.id_plate = lunch_plates.id_plate');
			$instance_CI->db->where('plates.type', 1);
			$instance_CI->db->where('lunch_plates.is_executive', 0);
			$instance_CI->db->where('lunch_plates.id_lunch', $id_lunch);
			$seconds = $instance_CI->db->get()->result_array();

			$resultado = array();

			array_push($resultado, $soups);
			array_push($resultado, $seconds);

			return $resultado;
		}else{
			return null;
		}

	}
}
?>