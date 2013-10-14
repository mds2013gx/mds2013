<?php
include_once('../persistence/NaturezaDAO.php');
class NaturezaController{
	private $naturezaDAO;
	
	public function __construct(){
		$this->naturezaDAO = new NaturezaDAO();
	}
	public function _listarTodos(){
		return $this->naturezaDAO->listarTodos();
	}
	public function _listarTodasAlfabicamente(){
		return $this->naturezaDAO->listarTodasAlfabicamente();
	}
	public function _consultarPorId($id){
		return $this->naturezaDAO->consultarPorId($id);
	}
	public function _consultarPorNome($natureza){
		return $this->naturezaDAO->consultarPorNome($natureza);
	}
	public function _inserirNatureza($arrayNatureza){
		return $this->naturezaDAO->inserirNatureza($arrayNatureza);
	}
}