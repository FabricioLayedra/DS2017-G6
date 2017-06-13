<?php 
if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Restaurant extends CI_Model{
	private $ID;
	private $name;
	private $address;
	private $phone;
	private $owner;

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /*GETTERS AND SETTERS*/
    	public function getID(){
		return $this->ID;
	}

	public function setID($ID){
		$this->ID = $ID;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getAddress(){
		return $this->address;
	}

	public function setAddress($address){
		$this->address = $address;
	}

	public function getPhone(){
		return $this->phone;
	}

	public function setPhone($phone){
		$this->phone = $phone;
	}

	public function getOwner(){
		return $this->owner;
	}

	public function setOwner($owner){
		$this->owner = $owner;
	}

	/* MODEL'S SETTERS AND GETTERS */

	public function getRestaurant(){
		return $this;
	}

	public function setRestaurant($ID, $name, $address, $phone, $owner){
		 $this->setID( $ID );
         $this->setName( $name );
         $this->address = $address;
         $this->phone = $phone;
         $this->owner = $owner;
	}

	/*DATABASE GETTING FUNCTIONS*/
	public static function getRestaurantById($id_restaurant){
		if (!is_null($id_restaurant)){
			$instance_CI =& get_instance();

			$restaurant = null;

			$instance_CI->db->select('restaurant.id_restaurant, restaurant.name, restaurant.address, restaurant.phone, restaurant.owner');
			$instance_CI->db->from('restaurant');
			$instance_CI->db->where('restaurant.id_restaurant', $id_restaurant);
			$restaurant = $instance_CI->db->get()->row();

			if (!is_null($restaurant)){
				$restaurant_obj = new Restaurant();

				$restaurant_obj->setRestaurant(
					$restaurant->id_restaurant,
					$restaurant->name,
					$restaurant->address,
					$restaurant->phone,
					$restaurant->owner);
				
				return $restaurant_obj;
			}else{
				return null;
			}
		}else{
			return null;
		}
	}

	public static function getNameRestaurantNameById($id_restaurant){
		if (!is_null($id_restaurant)){
			$instance_CI =& get_instance();

			$restaurant = null;

			$instance_CI->db->select('restaurant.name');
			$instance_CI->db->from('restaurant');
			$instance_CI->db->where('restaurant.id_restaurant', $id_restaurant);
			$restaurant = $instance_CI->db->get()->row();

			if (!is_null($restaurant)){
				$res = $restaurant->name;
				return $res;
			}else{
				return null;
			}
		}else{
			return null;
		}
	}

	public static function getRestaurantByAssistant($id_user){
		if(!is_null($id_user)){
			$instance_CI =& get_instance();

			$restaurant = null;

			$instance_CI->db->select('restaurant_assistants.id_restaurant, restaurant.name');
			$instance_CI->db->from('restaurant_assistants');
			$instance_CI->db->join('restaurant', 'restaurant.id_restaurant = restaurant_assistants.id_restaurant');
			$instance_CI->db->where('restaurant_assistants.id_user', $id_user);
			$restaurant = $instance_CI->db->get()->result_array();

			$restaurant_obj_array = array();

			if (!is_null($restaurant)){
				return $restaurant;
			}else{
				return null;
			}

		}else{
			return null;
		}
	}

	public static function getRestaurants(){
		$instance_CI =& get_instance();

		$restaurants = null;

		$instance_CI->db->select('restaurant.id_restaurant, restaurant.name, restaurant.address, restaurant.phone, restaurant.owner');
		$instance_CI->db->from('restaurant');
		$restaurants = $instance_CI->db->get()->result_array();

		if(!is_null($restaurants)){
			$restaurants_obj_array = array();
			foreach ($restaurants as $res) {
				$restaurants_obj_array[] = array(
					'id_restaurant'=>$res['id_restaurant'],
					'name'=>$res['name'],
					'address'=>$res['address'],
					'phone'=>$res['phone'],
					'owner'=>$res['owner']);
			}
			return $restaurants_obj_array;
		}else{
			return null;
		}
	}
}
?>