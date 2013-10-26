<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/mds2013/controller/NaturezaView.php');
class NaturezaView{
	private $naturezaCO;
	public function __construct(){
		$this->naturezaCO = new NaturezaController();
	}
}