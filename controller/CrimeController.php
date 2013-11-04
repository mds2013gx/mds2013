<?php
include_once(__APP_PATH.'/persistence/CrimeDAO.php');
include_once(__APP_PATH.'/persistence/TempoDAO.php');
include_once(__APP_PATH.'/persistence/NaturezaDAO.php');
include_once(__APP_PATH.'/model/Crime.php');
include_once(__APP_PATH.'/model/Tempo.php');
include_once(__APP_PATH.'/model/Natureza.php');
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
	public function _inserirCrime(Crime $crime){
		return $this->crimeDAO->inserirCrime($crime);
	}
	public function _somaDeCrimePorAno($ano){
		return $this->crimeDAO->somaDeCrimePorAno($ano);
	}
	public function _somaDeCrimePorNatureza($natureza){
		return $this->crimeDAO->somaDeCrimePorNatureza($natureza);
	}
	public function _inserirCrimeArrayParse($arrayCrime){
		for($i=0,$arrayKey = $arrayCrime,$inicio = 0;$i<count($arrayCrime);$i++){
			$natureza = key($arrayKey);
			$dadosNatureza = new Natureza();
			$naturezaDAO = new NaturezaDAO();
			$dadosNatureza = $naturezaDAO->consultarPorNome($natureza);
			$arrayTempo = $arrayCrime[$natureza];
			for($j=0;$j<count(array_keys($arrayCrime[$natureza]));$j++){
				$tempo = key($arrayTempo);
				$dadosTempo = new Tempo();
				$tempoDAO = new TempoDAO();
				$dadosTempo = $tempoDAO->consultarPorIntervalo($tempo);
				$dadosCrime = new Crime();
				$dadosCrime->__setIdNatureza($dadosNatureza->__getIdNatureza());
				$dadosCrime->__setIdTempo($dadosTempo->__getIdTempo());
				$dadosCrime->__setQuantidade($arrayCrime[$natureza][$tempo]);
				$this->crimeDAO->inserirCrime($dadosCrime);
				next($arrayTempo);
			}
			next($arrayKey);
		}
	}
	public function _retornarDadosDeSomaFormatado(){
		$tempoDAO = new TempoDAO();
		$dadosTempo = new Tempo();
		$arrayDadosTempo = $tempoDAO->listarTodos();
		for($i=0; $i<count($arrayDadosTempo);$i++){
			$dadosTempo = $arrayDadosTempo[$i];
			$dados[$i] = $dadosTempo->__getIntervalo();
		}
		for($i=0;$i<count($dados);$i++){
			$dadosCrime[$i]= $this->_somaDeCrimePorAno($dados[$i]);
		}
		return "data : [$dadosCrime[0],$dadosCrime[1],$dadosCrime[2],$dadosCrime[3],$dadosCrime[4],$dadosCrime[5],$dadosCrime[6],$dadosCrime[7],$dadosCrime[8],$dadosCrime[9],$dadosCrime[10]]";
	}
}