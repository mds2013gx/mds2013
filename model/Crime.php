<?php
include_once('/../exceptions/EFalhaLeituraSerieCrime.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/ETipoErrado.php');

class Crime{
	private $idCrime;
	private $quantidade;
	private $idTempo;
	private $idNatureza;
	private $idRA;
	private $exceptionCrime;
	
	
	public function __setIdCrime($idCrime){

		if(!is_numeric($idCrime)){
			throw new ETipoErrado();
		}
		$this->idCrime = $idCrime;
	}
	public function __getIdCrime(){
		return $this->idCrime;
	}
	public function __setQuantidade($quantidade){
	
		if(!is_numeric($quantidade)) {
			throw new ETipoErrado();
		}
		$this->quantidade = $quantidade;
	}
	public function __getQuantidade(){
		return $this->quantidade;
	}
	public function __setIdTempo($idTempo){
		
		if(!is_numeric($idTempo)){
			throw new ETipoErrado();
		}
		$this->idTempo = $idTempo;
	}
	public function __getIdTempo(){
		return $this->idTempo;
	}
	public function __setIdNatureza($idNatureza){
		
		if(!is_numeric($idNatureza)){
			throw new ETipoErrado();
		}
		$this->idNatureza = $idNatureza;
	}
	public function __getIdNatureza(){
		return $this->idNatureza;
	}
	public function __setIdRA($idRA){
		if(!is_numeric($idRA)){
			throw new ETipoErrado();
		}
		$this->idRA = $idRA;
	}
	public function __getIdRA(){
		return $this->idRA;
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