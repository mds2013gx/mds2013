<?php
include_once(__APP_PATH.'/controller/CategoriaController.php');
class CategoriaView{
	private $categoriaCO;
	public function __construct(){
		$this->categoriaCO = new CategoriaController();
	}
}