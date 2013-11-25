<?php
include_once('/../exceptions/EFalhaLeituraSerieCrime.php');

class Crime{
	private $idCrime;
	private $quantidade;
	private $idTempo;
	private $idNatureza;
	private $exceptionCrime;
	
	public function __setIdCrime($idCrime){
		
		if(!is_int($idCrime)){
			throw new EFalhaLeituraSerieCrime();
			echo $exceptionCrime->getMessage();
		}
		else {
			$this->idCrime = $idCrime;
		}
	}
	public function __getIdCrime(){
		return $this->idCrime;
	}
	public function __setQuantidade($quantidade){
		if( (!is_array($quantidade)) || (is_float($quantidade)) ){
			throw new EFalhaLeituraSerieCrime();
			echo $exceptionCrime->getMessage();
		}
		else{
			$this->quantidade = $quantidade;
		}
	}
	public function __getQuantidade(){
		return $this->quantidade;
	}
	public function __setIdTempo($idTempo){
		$exceptionCrime = new EFalhaLeituraSerieCrime();
		if((!is_numeric($idTempo)) || (is_float($idTempo))){
			throw $exceptionCrime;
			echo $exceptionCrime->getMessage();
		}
		else{
			$this->idTempo = $idTempo;
		}
	}
	public function __getIdTempo(){
		return $this->idTempo;
	}
	public function __setIdNatureza($idNatureza){
		if(!is_numeric($idNatureza)){
			throw new EFalhaLeituraSerieCrime();
			echo $exceptionCrime->getMessage();
		}
		else{
			$this->idNatureza = $idNatureza;
		}
	}
	public function __getIdNatureza(){
		return $this->idNatureza;
	}
	public function __construct(){
		
	}
	public function __constructOverload($idCrime="",$idTempo="",$idNatureza="",$quantidade=""){
		$this->idCrime = $idCrime;
		$this->idTempo = $idTempo;
		$this->idNatureza = $idNatureza;
		$this->quantidade = $quantidade;
	}
}