<?php
include_once('./persistence/TempoDAO.php');
include_once('./model/Tempo.php');
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
	public function _inserirTempo(Tempo $tempo){
		return $this->tempoDAO->inserirTempo($tempo);
	}
	public function _inserirTempoArrayParse($arrayTempo){
		for($i=0;$i<count($arrayTempo);$i++){
			$dadosTempo = new Tempo();
			$dadosTempo->__setIntervalo($arrayTempo[$i]);
			$this->tempoDAO->inserirTempo($dadosTempo);
		}
	}
}