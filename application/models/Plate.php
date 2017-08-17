<?php 
if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Plate extends CI_Model{
	private $id;
	private $name;
	private $type;

	function __construct() {
		parent::__construct();
        $this->load->database();

        // Helpers
        $this->load->helper('array');
	}

	/*GETTERS AND SETTERS STARTS*/

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getType(){
		return $this->type;
	}

	public function setType($type){
		$this->type = $type;
	}

	/*GETTERS AND SETTERS END*/

	/*MODELS GETTERS AND SETTERS*/

	public function getPlate(){
		return $this;
	}

	public function setPlate($id, $name, $type){
		$this->setId($id);
		$this->setName($name);
		$this->setType($type);
	}
}

?>