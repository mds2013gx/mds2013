<?php
include_once('./persistence/CategoriaDAO.php');
class CategoriaController{
	private $categoriaDAO;
	
	public function __construct(){
		$this->categoriaDAO = new CategoriaDAO();
	}
	public function _listarTodos(){
		return $this->categoriaDAO->listarTodos();
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
	public function _inserirCategoria($arrayCategoria){
		return $this->categoriaDAO->inserirCategoria($arrayCategoria);
	}
}