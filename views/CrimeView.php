<?php
include_once('./controller/CrimeView.php');
class CrimeView{
	private $crimeCO;
	public function __construct(){
		$this->crimeCO = new CrimeController();
	}
}