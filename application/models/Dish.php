<?php 
if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Dish extends CI_Model{
	private $id;
	private $restaurant;
	private $name;
	private $descripcion;
	private $ingredient;
	private $temp;
	private $img;
	private $category;
	private $type;

	function __construct() {
		parent::__construct();
        $this->load->database();

        // Helpers
        $this->load->helper('array');
        // Required models
        $this->load->model('Category');
        $this->load->model('Type');
	}


	/*GETTERS AND SETTERS*/

		public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getRestaurant(){
		return $this->restaurant;
	}

	public function setRestaurant($restaurant){
		$this->restaurant = $restaurant;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getIngredient(){
		return $this->ingredient;
	}

	public function setIngredient($ingredient){
		$this->ingredient = $ingredient;
	}

	public function getTemp(){
		return $this->temp;
	}

	public function setTemp($temp){
		$this->temp = $temp;
	}

	public function getImg(){
		return $this->img;
	}

	public function setImg($img){
		$this->img = $img;
	}

	public function getCategory(){
		return $this->category;
	}

	public function setCategory($category){
		$this->category = $category;
	}

	public function getType(){
		return $this->type;
	}

	public function setType($type){
		$this->type = $type;
	}

	/* MODEL'S SETTERS AND GETTERS */

	public function getDish(){
		return $this;
	}

	public function setDish($id, $restaurant, $name, $descripcion, $ingredient, $temp, $img, Category $category, Type $type){
		$this->setId($id);
		$this->setRestaurant($restaurant);
		$this->setName($name);
		$this->setDescripcion($descripcion);
		$this->setIngredient($ingredient);
		$this->setTemp($temp);
		$this->setImg($img);
		$this->setCategory($category);
		$this->setType($type);

	}

	/*DATABASE GETTING FUNCTIONS*/

	public static function getDishById($id_dish){
		if( !is_null($id_dish)){
			$instance_CI =& get_instance();

			$dish = null;

			$instance_CI->db->select('dish.id_dish, dish.id_restaurant, dish.name, dish.descripcion, dish.ingredient, dish.temp, dish.img, dish.id_category, dish.id_type');
			$instance_CI->db->from(dish);
			$instance_CI->db->where('dish.id_dish', $id_dish);
			$dish = instance_CI->db->get()->row();

			if (!is_null($dish)){
				$dish_obj = new Dish();

				$dish_obj->setDish(
					 $dish->id_dish,
					 $dish->id_restaurant,
					 $dish->name,
					 $dish->descripcion,
					 $dish->ingredient, 
					 $dish->temp,
					 ($dish->img != "" ? base_url('assets/uploads/dishes/')."/".$dish->img),
					 Category::getCategoryById($dish->id_category),
					 Type::getTypeById($dish->id_type)
					);
				return $dish_obj;
			}else{
				return null;
			}
		}else{
			return null;
		}
	}


	public static function getDishByRestaurant($id_restaurant){
		if( !is_null($id_restaurant)){
			$instance_CI =& get_instance();

			$dishes = null;

			$instance_CI->db->select('dish.id_dish, dish.id_restaurant, dish.name, dish.descripcion, dish.ingredient, dish.temp, dish.img, dish.id_category, dish.id_type');
			$instance_CI->db->from(dish);
			$instance_CI->db->where('dish.id_restaurant', $id_restaurant);
			$dishes = instance_CI->db->get()->$result_array();

			if (!is_null($dishes)){
				$dishes_obj_array = array();
				foreach ($dishes as $dish) {
					$dishes_obj_array[] = array(
						'id_dish'=> $dish['id_dish'],
						'id_restaurant'=> $dish['id_restaurant'],
						'name'=> $dish['name'],
						'descripcion'=> $dish['descripcion'],
						'ingredient'=> $dish['ingredient'],
						'temp'=> $dish['temp'],
						'img'=> $dish['img'],
						'id_category'=> $dish['id_category'],
						'id_type'=> $dish['id_type']
						);
				}

			}else{
				return null;
			}
		}else{
			return null;
		}
	}


	public static function getDishByCategory($id_category){
		if( !is_null($id_category)){
			$instance_CI =& get_instance();

			$dishes = null;

			$instance_CI->db->select('dish.id_dish, dish.id_restaurant, dish.name, dish.descripcion, dish.ingredient, dish.temp, dish.img, dish.id_category, dish.id_type');
			$instance_CI->db->from(dish);
			$instance_CI->db->where('dish.id_category', $id_category);
			$dishes = instance_CI->db->get()->$result_array();

			if (!is_null($dishes)){
				$dishes_obj_array = array();
				foreach ($dishes as $dish) {
					$dishes_obj_array[] = array(
						'id_dish'=> $dish['id_dish'],
						'id_restaurant'=> $dish['id_restaurant'],
						'name'=> $dish['name'],
						'descripcion'=> $dish['descripcion'],
						'ingredient'=> $dish['ingredient'],
						'temp'=> $dish['temp'],
						'img'=> $dish['img'],
						'id_category'=> $dish['id_category'],
						'id_type'=> $dish['id_type']
						);
				}
			}else{
				return null;
			}
		}else{
			return null;
		}
	}
}
?>