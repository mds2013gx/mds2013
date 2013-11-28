<?php
include_once('C:/xampp/htdocs/mds2013/persistence/CrimeDAO.php');
include_once('C:/xampp/htdocs/mds2013/persistence/TempoDAO.php');
include_once('C:/xampp/htdocs/mds2013/persistence/NaturezaDAO.php');
include_once('C:/xampp/htdocs/mds2013/model/Crime.php');
include_once('C:/xampp/htdocs/mds2013/model/Tempo.php');
include_once('C:/xampp/htdocs/mds2013/model/Natureza.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EErroConsulta.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EFalhaCrimeController.php');

class CrimeController{
	private $crimeDAO;
	
	public function __construct(){
		$this->crimeDAO = new CrimeDAO();
	}
	public function _listarTodos(){
		$arrayCrime = $this->crimeDAO->listarTodos();
		if(!is_array($arrayCrime)){
			throw new  EErroConsulta();
		}
		return $arrayCrime;
	}
	public function _consultarPorId($id){
		if(!is_numeric($id)){
			throw new EErroConsulta();
		}
		$crime = $this->crimeDAO->consultarPorId($id);
		if(get_class($crime)!= 'Crime'){
			throw new EErroConsulta();
		}
		return $crime;
	}
	public function _consultarPorIdNatureza($natureza){
		if(!is_numeric($natureza)){
			throw new EErroConsulta();			
		}
		$crime = $this->crimeDAO->consultarPorIdNatureza($natureza);
		if(get_class($crime)!= 'Crime'){
			throw new EErroConsulta();
		}
		return $crime;
	}
	public function _consultarPorIdTempo($tempo){
		if(!is_numeric($tempo)){
			throw new EErroConsulta();
		}
		$crime = $this->crimeDAO->consultarPorIdTempo($tempo);
		if(get_class($crime)!= 'Crime'){
			throw new EErroConsulta();
		}
		return $crime;
	}
	public function _inserirCrime(Crime $crime){
		return $this->crimeDAO->inserirCrime($crime);
	}
	public function _somaDeCrimePorAno($ano){
		if(!is_numeric($ano)){
			throw new EFalhaCrimeController();
		}
		 $resultado = $this->crimeDAO->somaDeCrimePorAno($ano);
		 if(!is_numeric($resultado)){
		 	throw new EFalhaCrimeController();
		 }
		 return $resultado;
	}
	public function _somaDeCrimePorNatureza($natureza){
		if(!is_string($natureza)){
			throw new EFalhaCrimeController();
		}
		$resultado = $this->crimeDAO->somaDeCrimePorNatureza($natureza);
		if(!is_numeric($resultado)){
			throw new EErroConsulta();
		}
		return $resultado;
	}
	public function _inserirCrimeArrayParse($arrayCrime){
		if(!is_array($arrayCrime)){
			throw new EFalhaCrimeController();
		}
		for($i=0,$arrayKey = $arrayCrime,$inicio = 0;$i<count($arrayCrime);$i++){
			$natureza = key($arrayKey);
			$dadosNatureza = new Natureza();
			$naturezaDAO = new NaturezaDAO();
			$dadosNatureza = $naturezaDAO->consultarPorNome($natureza);
			if(!is_string($dadosNatureza)){
				throw new EFalhaCrimeController();
			}
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
		return $dadosNatureza;
	}
	public function _retornarDadosDeSomaFormatado(){
		$tempoDAO = new TempoDAO();
		$dadosTempo = new Tempo();
		$arrayDadosTempo = $tempoDAO->listarTodos();
		for($i=0; $i<count($arrayDadosTempo);$i++){
			$dadosTempo = $arrayDadosTempo[$i];
			$dados[$i] = $dadosTempo->__getIntervalo();
			if(!is_numeric($dados[$i])){
				throw new EFalhaCrimeController();
			}
		}
		for($i=0;$i<count($dados);$i++){
			$dadosCrime[$i]= $this->_somaDeCrimePorAno($dados[$i]);
		}
		return "data : [$dadosCrime[0],$dadosCrime[1],$dadosCrime[2],$dadosCrime[3],$dadosCrime[4],$dadosCrime[5],$dadosCrime[6],$dadosCrime[7],$dadosCrime[8],$dadosCrime[9],$dadosCrime[10]]";
	}
}