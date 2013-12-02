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
		try{
			if(!is_numeric($idCrime)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->idCrime = $idCrime;
	}
	public function __getIdCrime(){
		try{
			if(!is_numeric($this->idCrime)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $this->idCrime;
	}
	public function __setQuantidade($quantidade){
		try{
			if(!is_numeric($quantidade)) {
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->quantidade = $quantidade;
	}
	public function __getQuantidade(){
		try{
			if(!is_numeric($this->quantidade)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $this->quantidade;
	}
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
		try{
			if(!is_numeric($this->idTempo)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $this->idTempo;
	}
	public function __setIdNatureza($idNatureza){
		try{
			if(!is_numeric($idNatureza)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->idNatureza = $idNatureza;
	}
	public function __getIdNatureza(){
		try{
			if(!is_numeric($this->idNatureza)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $this->idNatureza;
	}
	public function __setIdRa($idRA){
		try{
			if(!is_numeric($idRA)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->idRA = $idRA;
	}
	public function __getIdRA(){
		try{
			if(!is_numeric($this->idRA)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $this->idRA;
	}
	public function __construct(){
		
	}
	public function __constructOverload($idCrime="",$idTempo="",$idNatureza="",$quantidade=""){
		try{
			if( (!is_numeric($idCrime)) || (!is_numeric($idTempo)) || (!is_numeric($idNatureza)) || (!is_numeric($quantidade)) ){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->idCrime = $idCrime;
		$this->idTempo = $idTempo;
		$this->idNatureza = $idNatureza;
		$this->quantidade = $quantidade;
	}
}