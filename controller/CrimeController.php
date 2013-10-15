<?php
include_once('./persistence/CrimeDAO.php');
class CrimeController{
	private $crimeDAO;
	
	public function __construct(){
		$this->crimeDAO = new CrimeDAO();
	}
	public function _listarTodos(){
		return $this->crimeDAO->listarTodos();
	}
	public function _consultarPorId($id){
		return $this->crimeDAO->consultarPorId($id);
	}
	public function _consultarPorIdNatureza($natureza){
		return $this->crimeDAO->consultarPorIdNatureza($natureza);
	}
	public function _consultarPorIdTempo($tempo){
		return $this->crimeDAO->consultarPorIdNatureza($tempo);
	}
	public function _inserirCrime($arrayCrime){
		return $this->crimeDAO->inserirCrime($arrayCrime);
	}
}