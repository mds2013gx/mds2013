<?php
include_once(__APP_PATH.'/controller/NaturezaView.php');
class NaturezaView{
	private $naturezaCO;
	public function __construct(){
		$this->naturezaCO = new NaturezaController();
	}
}