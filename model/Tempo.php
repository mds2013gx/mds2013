<?php
include_once('C:/xampp/htdocs/mds2013/exceptions/ETipoErrado.php');
class Tempo{
	private $idTempo;
	private $intervalo;
	private $mes;
	
	
	public function __setIdTempo($idTempo){
		
		if(!is_numeric($idTempo)){
			throw new ETipoErrado();
		}
		$this->idTempo = $idTempo;
	}
	public function __getIdTempo(){
		$retorno = $this->idTempo;
		if(!is_numeric($retorno)){
			throw new ETipoErrado();
		}
		return $retorno;
	}
	public function __setIntervalo($intervalo){
		
		if(!is_numeric($intervalo)){
			throw new ETipoErrado();
		}
		$this->intervalo = $intervalo;
	}
	public function __getIntervalo(){
		$retorno = $this->intervalo;
		if(!is_numeric($retorno)){
			throw new ETipoErrado();
		}
		return $retorno;
	}
	public function __setMes($mes){
		
		if(!is_string($mes)){
			throw new ETipoErrado();
		}
		$this->mes = $mes;
	}
	public function __getMes(){
		$retorno =  $this->mes;
		if(!is_string($retorno)){
			throw new ETipoErrado();
		}
		return  $retorno;
	}
	public function __construct(){
		
	}
	public function __constructOverload($idTempo,$intervalo,$mes){
		
			if((!is_numeric($idTempo)) || (!is_string($intervalo)) || (!is_string($mes))){
				throw new ETipoErrado();
			}
		$this->idTempo = $idTempo;
		$this->intervalo = $intervalo;
		$this->mes = $mes;
	}
}