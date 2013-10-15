<?php
include_once('./controller/NaturezaView.php');
class NaturezaView{
	private $naturezaCO;
	public function __construct(){
		$this->naturezaCO = new NaturezaController();
	}
}