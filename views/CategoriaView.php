<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/mds2013/controller/CategoriaController.php');
class CategoriaView{
	private $categoriaCO;
	public function __construct(){
		$this->categoriaCO = new CategoriaController();
	}
}