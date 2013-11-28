<?php
include_once('C:/xampp/htdocs/mds2013/controller/CategoriaController.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EErroConsulta.php');

class CategoriaView{
	private $categoriaCO;
	
	public function __construct(){
		$this->categoriaCO = new CategoriaController();
	}
	public function listarTodas(){
		$arrayCategoria = $this->categoriaCO->_listarTodas();
		if(!is_array($arrayCategoria)){
			throw new  EErroConsulta();
		}
		return $arrayCategoria;
	}
	public function _listarTodasAlfabicamente(){
		$arrayCategoria = $this->categoriaCO->_listarTodasAlfabicamente();
		if(!is_array($arrayCategoria)){
			throw new  EErroConsulta();
		}
		return $arrayCategoria;
	}
	public function consultarPorId($id){
		$categoria = $this->categoriaCO->_consultarPorId($id);
		if(get_class($categoria)!= 'Categoria'){
			throw new EErroConsulta();
		}
		return $categoria;
	}
	public function _consultarPorNome($nomeCategoria){
		$categoria =  $this->categoriaCO->_consultarPorNome($nomeCategoria);
		if(get_class($categoria)!= 'Categoria'){
			throw new EErroConsulta();
		}
		return $categoria;
	}
}