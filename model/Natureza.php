<?php
include_once('C:/xampp/htdocs/mds2013/exceptions/ETipoErrado.php');

class Natureza{
	private $idNatureza;
	private $natureza;
	private $idCategoria;
	
	public function __construct(){
		
	}
	public function __constructOverload($idNatureza,$nomeNatureza,$idCategoriaNatureza){
		try{
			if( (!is_numeric($idNatureza))|| (!is_string($nomeNatureza)) || (!is_numeric($idCategoriaNatureza)) ){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->idNatureza = $idNatureza;
		$this->natureza = $nomeNatureza;
		$this->idCategoria = $idCategoriaNatureza;
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
	public function __setIdCategoria($idCategoria){
		try{
			if(!is_numeric($idCategoria)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->idCategoria = $idCategoria;
	}
	public function __getIdCategoria(){
		try{
			if(!is_numeric($this->idCategoria)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $this->idCategoria;
	}
	public function __setNatureza($natureza){
		try{
			if(!is_string($natureza)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->natureza = $natureza;
	}
	public function __getNatureza(){
		try{
			if(!is_string($this->natureza)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $this->natureza;
	}
}