<?php
include_once('C:/xampp/htdocs/mds2013/persistence/CategoriaDAO.php');
include_once('C:/xampp/htdocs/mds2013/model/Categoria.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EErroConsulta.php');

class CategoriaController{
	private $categoriaDAO;
	
	public function __construct(){
		$this->categoriaDAO = new CategoriaDAO();
	}
	public function _listarTodas(){
		$arrayCategoria = $this->categoriaDAO->listarTodas();
		if(!is_array($arrayCategoria)){
			throw new  EErroConsulta();
		}
		return $arrayCategoria;
	}
	public function _listarTodasAlfabicamente(){
		$arrayCategoria = $this->categoriaDAO->listarTodasAlfabicamente();
		if(!is_array($arrayCategoria)){
			throw new  EErroConsulta();
		}
		return $arrayCategoria;
	}
	public function _consultarPorId($id){
		 $categoria = $this->categoriaDAO->consultarPorId($id);
		 if(get_class($categoria)!= 'Categoria'){
		 	throw new EErroConsulta();
		 }
		 return $categoria;
	}
	public function _consultarPorNome($nomeCategoria){
		 $categoria =  $this->categoriaDAO->consultarPorNome($nomeCategoria);
		 if(get_class($categoria)!= 'Categoria'){
		 	throw new EErroConsulta();
		 }
		 return $categoria;
	}
	public function _inserirCategoria(Categoria $categoria){
		return $this->categoriaDAO->inserirCategoria($categoria);
	}
	public function _inserirCategoriaArrayParse($arrayCategoria){
		$dadosCategoria = new Categoria();
		for($i=0; $i<count($arrayCategoria);$i++){
			$dadosCategoria->__setNomeCategoria($arrayCategoria[$i]);
			$retorno = $this->categoriaDAO->inserirCategoria($dadosCategoria);
		}
	
	}
}