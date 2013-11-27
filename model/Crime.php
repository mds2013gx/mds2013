<?php
include_once('/../exceptions/EFalhaLeituraSerieCrime.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/ETipoErrado.php');

class Crime{
	private $idCrime;
	private $quantidade;
	private $idTempo;
	private $idNatureza;
	private $exceptionCrime;
	
	public function __setIdCrime($idCrime){
		
		if(!is_numeric($idCrime)){
			throw new ETipoErrado();
			echo $exceptionCrime->getMessage();
		}
		else {
			$this->idCrime = $idCrime;
		}
	}
	public function __getIdCrime(){
		if(!is_numeric($this->idCrime)){
			throw new ETipoErrado();
		}
		return $this->idCrime;
	}
	public function __setQuantidade($quantidade){
		if(!is_numeric($quantidade)) {
			throw new EFalhaLeituraSerieCrime();
				}
		else{
			$this->quantidade = $quantidade;
		}
	}
	public function __getQuantidade(){
		if(!is_numeric($this->quantidade)){
			throw new ETipoErrado();
		}
		return $this->quantidade;
	}
	public function __setIdTempo($idTempo){
		if(!is_numeric($idTempo)){
			throw new ETipoErrado();
		}
		else{
			$this->idTempo = $idTempo;
		}
	}
	public function __getIdTempo(){
		if(!is_numeric($this->idTempo)){
			throw new ETipoErrado();
		}
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
		if(!is_numeric($this->idNatureza)){
			throw new ETipoErrado();
		}
		return $this->idNatureza;
	}
	public function __construct(){
		
	}
	public function __constructOverload($idCrime="",$idTempo="",$idNatureza="",$quantidade=""){
		if( (!is_numeric($idCrime)) || (!is_numeric($idTempo)) || (!is_numeric($idNatureza)) || (!is_numeric($quantidade)) ){
			throw new ETipoErrado();
		}
		$this->idCrime = $idCrime;
		$this->idTempo = $idTempo;
		$this->idNatureza = $idNatureza;
		$this->quantidade = $quantidade;
	}
}