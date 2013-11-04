<?php
include_once(__APP_PATH.'/persistence/TempoDAO.php');
include_once(__APP_PATH.'/model/Tempo.php');
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
	public function _retornarDadosFormatados(){
		$dadosTempo = new Tempo();
		$arrayDadosTempo = $this->_listarTodos();
		for($i=0; $i<count($arrayDadosTempo);$i++){
			$dadosTempo = $arrayDadosTempo[$i];
			$dados[$i] = $dadosTempo->__getIntervalo();
		}
		return "labels : [\"$dados[0]\",\"$dados[1]\",\"$dados[2]\",\"$dados[3]\",\"$dados[4]\",\"$dados[5]\",\"$dados[6]\",\"$dados[7]\",\"$dados[8]\",\"$dados[9]\",\"$dados[10]\"]";
	}
}