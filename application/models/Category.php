<?php 
if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Category extends CI_Model{
	private $ID;
	private $name;

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

	/* MODEL'S SETTERS AND GETTERS */

	public function getCategory(){
		return $this;
	}

	public function setCategory($ID, $name){
		 $this->setID( $ID );
         $this->setName( $name );
	}

	/*DATABASE GETTING FUNCTIONS*/
	public static function getCategoryById($id_category){
		if (!is_null($id_category)){
			$instance_CI =& get_instance();

			$category = null;

			$instance_CI->db->select('category.id_category, category.name');
			$instance_CI->db->from('category');
			$instance_CI->db->where('category.id_category', $id_category);
			$category = $instance_CI->db->get()->row();

			if (!is_null($category)){
				$category_obj = new Category();

				$category_obj->setCategory(
					$category->id_category,
					$category->name);
				return $category_obj;
			}else{
				return null;
			}
		}else{
			return null;
		}
	}
}
?>