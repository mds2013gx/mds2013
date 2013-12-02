<?php
include_once('C:/xampp/htdocs/mds2013/exceptions/ETipoErrado.php');
class Tempo{
	private $idTempo;
	private $intervalo;
	private $mes;
	
	
	public function __setIdTempo($idTempo){
		try{
			if(!is_numeric($idTempo)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->idTempo = $idTempo;
	}
	public function __getIdTempo(){
		$retorno = $this->idTempo;
		try{
			if(!is_numeric($retorno)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $retorno;
	}
	public function __setIntervalo($intervalo){
		try{
			if(!is_numeric($intervalo)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->intervalo = $intervalo;
	}
	public function __getIntervalo(){
		$retorno = $this->intervalo;
		try{
			if(!is_numeric($retorno)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $retorno;
	}
	public function __setMes($mes){
		try{
			if(!is_string($mes)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->mes = $mes;
	}
	public function __getMes(){
		$retorno =  $this->Mes;
		try{
			if(!is_string($retorno)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return  $retorno;
	}
	public function __construct(){
		
	}
	public function __constructOverload($idTempo,$intervalo,$mes){
		try{
			if(!is_numeric($idTempo) || !is_numeric($intervalo) || !is_string($mes)){
				throw new EErroConsulta();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->idTempo = $idTempo;
		$this->intervalo = $intervalo;
		$this->mes = $mes;
	}
}