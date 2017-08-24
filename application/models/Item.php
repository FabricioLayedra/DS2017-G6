<?php 
if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Item extends CI_Model{
	private $id;
	private $soup;
	private $second;
	private $dessert;
	private $drink;
	private $executive;


	function __construct() {
		parent::__construct();
        $this->load->database();
        // Required models
        $this->load->model('Plate');
	}

	/*GETTERS AND SETTERS STARTS*/

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getSoup(){
		return $this->soup;
	}

	public function setSoup($soup){
		$this->soup = $soup;
	}

	public function getSecond(){
		return $this->second;
	}

	public function setSecond($second){
		$this->second = $second;
	}

	public function getDessert(){
		return $this->dessert;
	}

	public function setDessert($dessert){
		$this->dessert = $dessert;
	}

	public function getExecutive(){
		return $this->executive;
	}

	public function setExecutive($executive){
		$this->executive = $executive;
	}

	public function getDrink(){
		return $this->drink;
	}

	public function setDrink($drink){
		$this->drink = $drink;
	}

	/*GETTERS AND SETTERS END*/

	/*MODELS GETTERS AND SETTERS*/

	public function getItem(){
		return $this;
	}

	public function setItem($id, $soup, $second,  $dessert,  $drink, $executive){
		$this->setId($id);
		$this->setSoup($soup);
		$this->setSecond($second);
		$this->setDessert($dessert);
		$this->setDrink($drink);
		$this->setExecutive($executive);

	}

}
?>