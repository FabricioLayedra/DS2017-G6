<?php 
if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Order extends CI_Model{
	private $id;
	private $user;
	private $date;
	private $pickup_init;
	private $pickup_expire;
	private $items;
	private $payment_type;
	private $total_amount;

	function __construct() {
		parent::__construct();
        $this->load->database();

        // Helpers
        $this->load->helper('array');
        // Required models
        $this->load->model('Item');
        $this->load->model('Restaurant');
        $this->load->model('User');
	}

	/*GETTERS AND SETTERS STARTS*/
	
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getUser(){
		return $this->user;
	}

	public function setUser($user){
		$this->user = $user;
	}

	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}

	public function getPickup_init(){
		return $this->pickup_init;
	}

	public function setPickup_init($pickup_init){
		$this->pickup_init = $pickup_init;
	}

	public function getPickup_expire(){
		return $this->pickup_expire;
	}

	public function setPickup_expire($pickup_expire){
		$this->pickup_expire = $pickup_expire;
	}

	public function getItems(){
		return $this->items;
	}

	public function setItems($items){
		$this->items = $items;
	}

	public function getPayment_type(){
		return $this->payment_type;
	}

	public function setPayment_type($payment_type){
		$this->payment_type = $payment_type;
	}

	public function getTotal_amount(){
		return $this->total_amount;
	}

	public function setTotal_amount($total_amount){
		$this->total_amount = $total_amount;
	}

	/*GETTERS AND SETTERS END*/

	/*MODELS GETTERS AND SETTERS*/

	public function getOrder(){
		return $this;
	}

	public function setOrder($id, $user, $date,  $pickup_init,  $pickup_expire, array $items,  $payment_type,  $total_amount){
		$this->setId($id);
		$this->setUser($day);
		$this->setDate($soups);
		$this->setPickup_init($seconds);
		$this->setPickup_expire($drink);
		$this->setItems($dessert);
		$this->setPayment_type($exc_soup);
		$this->setTotal_amount($exc_second);

	}

}
?>