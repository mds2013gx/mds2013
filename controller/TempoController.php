<?php
include_once('../persistence/TempoDAO.php');
class TempoController{
	private $tempoDAO;
	
	public function __construct(){
		$this->tempoDAO = new TempoDAO();
	}
	public function _listarTodos(){
		return $this->tempoDAO->listarTodos();
	}
	public function _listarTodasEmOrdem(){
		return $this->tempoDAO->listarTodasEmOrdem();
	}
	public function _consultarPorId($id){
		return $this->tempoDAO->consultarPorId($id);
	}
	public function _consultarPorIntervalo($intervalo){
		return $this->tempoDAO->consultarPorIntervalo($intervalo);
	}
	public function _inserirTempo($arrayTempo){
		return $this->tempoDAO->inserirTempo($arrayTempo);
	}
}