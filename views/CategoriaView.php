<?php
include_once('./controller/CategoriaController.php');
class CategoriaView{
	private $categoriaCO;
	public function __construct(){
		$this->categoriaCO = new CategoriaController();
	}
}