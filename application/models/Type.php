<?php 
if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Type extends CI_Model{
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

	public function getType(){
		return $this;
	}

	public function setType($ID, $name){
		 $this->setID( $ID );
         $this->setName( $name );
	}

	/*DATABASE GETTING FUNCTIONS*/

	public static function getTypeById($id_type){
		if (!is_null($id_type)){
			$instance_CI =& get_instance();

			$type = null;

			$instance_CI->db->select('type.id_type, type.name');
			$instance_CI->db->from('type');
			$instance_CI->db->where('type.id_type', $id_type);
			$type = $instance_CI->db->get()->row();

			if (!is_null($type)){
				$type_obj = new Type();

				$type_obj->setType(
					$type->id_type,
					$type->name);
				return $type_obj;
			}else{
				return null;
			}
		}else{
			return null;
		}
	}
}
?>