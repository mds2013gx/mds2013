<?php
include_once('C:/xampp/htdocs/mds2013/exceptions/ETipoErrado.php');

class Categoria{
	private $idCategoria;
	private $nomeCategoria;
	
	public function __setIdCategoria($idCategoria){
		try{
			if (!is_numeric($idCategoria)){
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
			if (!is_numeric($this->idCategoria)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $this->idCategoria;
	}
	public function __setNomeCategoria($nomeCategoria){
		try{
			if(!is_string($nomeCategoria)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->nomeCategoria = $nomeCategoria;
	}
	public function __getNomeCategoria(){
		try{
			if (!is_string($this->nomeCategoria)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $this->nomeCategoria;
	}
	public function __constructOverload($idCategoria,$nomeCategoria){
		try{
			if ( (!is_string($nomeCategoria)) || (!is_numeric($idCategoria))){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->idCategoria = $idCategoria;
		$this->nomeCategoria = $nomeCategoria;
	}
	public function __construct(){
		
	}
}