<?php
class Tempo{
	private $idTempo;
	private $intervalo;
	
	public function __setIdTempo($idTempo){
		$this->idTempo = $idTempo;
	}
	public function __getIdTempo(){
		return $this->idTempo;
	}
	public function __setIntervalo($intervalo){
		$this->intervalo = $intervalo;
	}
	public function __getIntervalo(){
		return $this->intervalo;
	}
	public function __construct(){
		
	}
	public function __constructOverload($idTempo,$intervalo){
		$this->idTempo = $idTempo;
		$this->intervalo = $intervalo;
	}
}