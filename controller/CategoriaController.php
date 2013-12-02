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
		try{
			if(!is_array($arrayCategoria)){
				throw new  EErroConsulta();
			}
		}
		catch(EErroConsulta $e){
			echo $e->getMessage();
		}
		return $arrayCategoria;
	}
	public function _listarTodasAlfabicamente(){
		$arrayCategoria = $this->categoriaDAO->listarTodasAlfabicamente();
		try{
			if(!is_array($arrayCategoria)){
				throw new  EErroConsulta();
			}
		}
		catch(EErroConsulta $e){
			echo $e->getMessage();
		}
		return $arrayCategoria;
	}
	public function _consultarPorId($id){
		try{
			if(!is_int($id)){
				throw new EErroConsulta();
			}
		}
		catch(EErroConsulta $e){
			echo $e->getMessage();
		}
		 $categoria = $this->categoriaDAO->consultarPorId($id);
		 try{
			 if(get_class($categoria)!= 'Categoria'){
			 	throw new EErroConsulta();
			 }
		 }
		 catch(EErroConsulta $e){
		 	echo $e->getMessage();
		 }
		 return $categoria;
	}
	public function _consultarPorNome($nomeCategoria){
		try{
			 if(!is_string($nomeCategoria)){
			 	throw new EErroConsulta();
			 }
		}
		catch(EErroConsulta $e){
			echo $e->getMessage();
		}
		 $categoria =  $this->categoriaDAO->consultarPorNome($nomeCategoria);
		 try{
			 if(get_class($categoria)!= 'Categoria'){
			 	throw new EErroConsulta();
			 }
		 }
		 catch(EErroConsulta $e){
		 	echo $e->getMessage();
		 }
		 return $categoria;
	}
	public function _inserirCategoria(Categoria $categoria){
		return $this->categoriaDAO->inserirCategoria($categoria);
	}
	public function _inserirCategoriaArrayParseSerie($arrayCategoria){
		try{
			if(!is_array($arrayCategoria)){
				throw new EErroConsulta();
			}
		}
		catch(EErroConsulta $e){
			echo $e->getMessage();
		}
		$dadosCategoria = new Categoria();
		for($i=0; $i<count($arrayCategoria);$i++){
			$dadosCategoria->__setNomeCategoria($arrayCategoria[$i]);
			$retorno = $this->categoriaDAO->inserirCategoria($dadosCategoria);
		}
	
	}
}