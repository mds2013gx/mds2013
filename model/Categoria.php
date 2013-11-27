<?php
include_once('C:/xampp/htdocs/mds2013/exceptions/ETipoErrado.php');

class Categoria{
	private $idCategoria;
	private $nomeCategoria;
	
	public function __setIdCategoria($idCategoria){
		if (!is_numeric($idCategoria)){
			throw new ETipoErrado();
		}
		$this->idCategoria = $idCategoria;
	}
	public function __getIdCategoria(){
		if (!is_numeric($this->idCategoria)){
			throw new ETipoErrado();
		}
		return $this->idCategoria;
	}
	public function __setNomeCategoria($nomeCategoria){
		if(!is_string($nomeCategoria)){
			throw new ETipoErrado();
		}
		$this->nomeCategoria = $nomeCategoria;
	}
	public function __getNomeCategoria(){
		if (!is_string($this->nomeCategoria)){
			throw new ETipoErrado();
		}
		return $this->nomeCategoria;
	}
	public function __constructOverload($idCategoria,$nomeCategoria){
		if ( (!is_string($nomeCategoria)) || (!is_numeric($idCategoria))){
			throw new ETipoErrado();
		}
		$this->idCategoria = $idCategoria;
		$this->nomeCategoria = $nomeCategoria;
	}
	public function __construct(){
		
	}
}