<?php
include_once('C:/xampp/htdocs/mds2013/controller/NaturezaView.php');
class NaturezaView{
	private $naturezaCO;
	public function __construct(){
		$this->naturezaCO = new NaturezaController();
	}
}