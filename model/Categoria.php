<?php
class Categoria{
	private $idCategoria;
	private $nomeCategoria;
	
	public function __setIdCategoria($idCategoria){
		$this->idCategoria = $idCategoria;
	}
	public function __getIdCategoria(){
		return $this->idCategoria;
	}
	public function __setNomeCategoria($nomeCategoria){
		$this->nomeCategoria = nomeCategoria;
	}
	public function __getNomeCategoria(){
		return $this->nomeCategoria;
	}
	
	public function __construct(){
		
	}
	
	public function __construct($idCategoria,$nomeCategoria){
		$this->idCategoria = $idCategoria;
		$this->nomeCategoria = $nomeCategoria;
	}
}