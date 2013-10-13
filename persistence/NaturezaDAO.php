<?php
include_once('../model/Natureza.php');
include_once('../model/Categoria.php');
include_once('CategoriaDAO.php');
class NaturezaDAO{
	private $conexao;
	public function __construct(){
		$this->conexao = new Conexao();
	}

	public function listarTodas(){
		$sql = "SELECT * FROM natureza";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosNatureza = new Natureza($registro->ID_NATUREZA,$registro->NATUREZA,$registro->CATEGORIA_ID_CATEGORIA);				
			$retornaNaturezas[] = $dadosNatureza;
		}
		return $retornaNaturezas;
	}
	public function listarTodasAlfabicamente(){
		$sql = "SELECT * FROM natureza ORDER BY natureza ASC ";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosNatureza = new Natureza($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA,$registro->CATEGORIA_ID_CATEGORIA);
			$retornaNaturezas[] = $dadosNatureza;
		}
		return $retornaNaturezas;
	}
	public function consultarPorId($id){
		$sql = "SELECT * FROM natureza WHERE id_natureza = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosNatureza = new Natureza($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA,$registro->CATEGORIA_ID_CATEGORIA);
		return $dadosNatureza;

	}
	public function consultarPorNome($natureza){
		$sql = "SELECT * FROM natureza WHERE natureza = $natureza";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosNatureza = new Natureza($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA,$registro->CATEGORIA_ID_CATEGORIA);
		return $dadosNatureza;
	}
	public function inserirNatureza($arrayNatureza){
		for($i=0; $i<(count($arrayNatureza,COUNT_RECURSIVE)-count($arrayNatureza));$i++){
			$categoriaDAO = new CategoriaDAO();
			$dadosCategoria = new Categoria();
			$dadosNatureza = new Natureza();
			$dadosCategoria = $categoriaDAO->consultarPorNome(key($arrayNatureza));
			$dadosNatureza->__setNatureza($arrayNatureza[key($arrayNatureza)][$i]);
			$sql = "INSERT INTO categoria_id_categoria,natureza values ('{$dadosCategoria->__getNomeCategoria()}','{$dadosNatureza->__getNomeNatureza()}')";
			$this->conexao->banco->Execute($sql);
		}
	}
}