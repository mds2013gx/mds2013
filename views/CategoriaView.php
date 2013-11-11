<?php
include_once('C:/xampp/htdocs/mds2013/controller/CategoriaController.php');
class CategoriaView{
	private $categoriaCO;
	public function __construct(){
		$this->categoriaCO = new CategoriaController();
	}
}