<?php
class Natureza{
	private $idNatureza;
	private $natureza;
	private $idCategoria;
	
	public function __construct(){
		
	}
	public function __constructOverload($idNatureza,$nomeNatureza,$idCategoriaNatureza){
		$this->idNatureza = $idNatureza;
		$this->natureza = $nomeNatureza;
		$this->idCategoria = $idCategoriaNatureza;
	}
	public function __setIdNatureza($idNatureza){
		$this->idNatureza = $idNatureza;
	}
	public function __getIdNatureza(){
		return $this->idNatureza;
	}
	public function __setIdCategoria($idCategoria){
		$this->idCategoria = $idCategoria;
	}
	public function __getIdCategoria(){
		return $this->idCategoria;
	}
	public function __setNatureza($natureza){
		$this->natureza = $natureza;
	}
	public function __getNatureza(){
		return $this->natureza;
	}
}