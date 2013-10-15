<?php
include_once('./controller/CategoriaView.php');
class CategoriaView{
	private $categoriaCO;
	public function __construct(){
		$this->categoriaCO = new CategoriaController();
	}
}