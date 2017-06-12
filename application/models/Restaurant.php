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
}
?>