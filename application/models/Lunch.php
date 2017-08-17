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

	public static function getLunchById($id_lunch){
		if(!is_null($id_lunch)){
			$instance_CI =& get_instance();

			$lunch = null;
			$soups = null;
			$seconds = null;
			$drinks = null;
			$desserts = null;

			$instance_CI->db->select('lunch.id_lunch, lunch.id_restaurant, lunch.date');
			$instance_CI->db->from('lunch');
			$instance_CI->db->where('lunch.id_restaurant', $id_lunch);
			$lunch = $instance_CI->db->get()->row();

			$instance_CI->db->select('lunch_plates.id_plate, plates.name, lunch_plates.is_executive');
			$instance_CI->db->from('lunch_plates');
			$instance_CI->db->join('plates', 'plates.id_plate = lunch_plates.id_plate')
			$instance_CI->db->where('plates.type', 0);
			$soups = $instance_CI->db->get()->result_array();

			$instance_CI->db->select('lunch_plates.id_plate, plates.name, lunch_plates.is_executive');
			$instance_CI->db->from('lunch_plates');
			$instance_CI->db->join('plates', 'plates.id_plate = lunch_plates.id_plate')
			$instance_CI->db->where('plates.type', 1);
			$seconds = $instance_CI->db->get()->result_array();


			$instance_CI->db->select('lunch_plates.id_plate, plates.name, lunch_plates.is_executive');
			$instance_CI->db->from('lunch_plates');
			$instance_CI->db->join('plates', 'plates.id_plate = lunch_plates.id_plate')
			$instance_CI->db->where('plates.type', 2);
			$drinks = $instance_CI->db->get()->result_array();

			$instance_CI->db->select('lunch_plates.id_plate, plates.name, lunch_plates.is_executive');
			$instance_CI->db->from('lunch_plates');
			$instance_CI->db->join('plates', 'plates.id_plate = lunch_plates.id_plate')
			$instance_CI->db->where('plates.type', 3);
			$desserts = $instance_CI->db->get()->result_array();


			if(!is_null($lunch)){

			}else{
				return null;
			}

		}else{
			return null;
		}
	}
}
?>