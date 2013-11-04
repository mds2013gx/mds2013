<?php
include_once(__APP_PATH.'/persistence/CategoriaDAO.php');
include_once(__APP_PATH.'/model/Categoria.php');
class CategoriaController{
	private $categoriaDAO;
	
	public function __construct(){
		$this->categoriaDAO = new CategoriaDAO();
	}
	public function _listarTodas(){
		return $this->categoriaDAO->listarTodas();
	}
	public function _listarTodasAlfabicamente(){
		return $this->categoriaDAO->listarTodasAlfabicamente();
	}
	public function _consultarPorId($id){
		return $this->categoriaDAO->consultarPorId($id);
	}
	public function _consultarPorNome($nomeCategoria){
		return $this->categoriaDAO->consultarPorNome($nomeCategoria);
	}
	public function _inserirCategoria(Categoria $categoria){
		return $this->categoriaDAO->inserirCategoria($categoria);
	}
	public function _inserirCategoriaArrayParse($arrayCategoria){
		$dadosCategoria = new Categoria();
		for($i=0; $i<count($arrayCategoria);$i++){
			$dadosCategoria->__setNomeCategoria($arrayCategoria[$i]);
			$this->categoriaDAO->inserirCategoria($dadosCategoria);
		}
	}
}