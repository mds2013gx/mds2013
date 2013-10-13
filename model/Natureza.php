<?php
class Natureza{
	private $idNatureza;
	private $idCategoria;
	private $natureza;
	
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