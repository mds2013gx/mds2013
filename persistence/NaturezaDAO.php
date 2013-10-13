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
		$resultado = $this->conexao->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosNatureza = new Natureza();
			$dadosNatureza->__setIdNatureza($registro->ID_NATUREZA);
			$dadosNatureza->__setNatureza($registro->NATUREZA);
			$dadosNatureza->__setIdCategoria($registro->CATEGORIA_ID_CATEGORIA);
				
			$retornaNaturezas[] = $dadosNatureza;
		}
		return $retornaNaturezas;
	}
	public function listarTodasAlfabicamente(){
		$sql = "SELECT * FROM natureza ORDER BY natureza ASC ";
		$resultado = $this->conexao->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosNatureza = new Natureza();
			$dadosNatureza->__setIdNatureza($registro->ID_CATEGORIA);
			$dadosNatureza->__setNatureza($registro->NOME_CATEGORIA);
			$dadosNatureza->__setIdCategoria($registro->CATEGORIA_ID_CATEGORIA);

			$retornaNaturezas[] = $dadosNatureza;
		}
		return $retornaNaturezas;
	}
	public function consultarPorId($id){
		$sql = "SELECT * FROM natureza WHERE id_natureza = $id";
		$resultado = $this->conexao->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosNatureza = new Natureza();
			$dadosNatureza->__setIdNatureza($registro->ID_CATEGORIA);
			$dadosNatureza->__setNomeNatureza($registro->NOME_CATEGORIA);
			$dadosNatureza->__setIdCategoria($registro->CATEGORIA_ID_CATEGORIA);

			$retornaNaturezas[] = $dadosNatureza;
		}
		return $retornaNaturezas;

	}
	public function consultarPorNome($natureza){
		$sql = "SELECT * FROM natureza WHERE natureza = $natureza";
		$resultado = $this->conexao->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosNatureza = new Natureza();
			$dadosNatureza->__setIdNatureza($registro->ID_CATEGORIA);
			$dadosNatureza->__setNomeNatureza($registro->NOME_CATEGORIA);
			$dadosNatureza->__setIdCategoria($registro->CATEGORIA_ID_CATEGORIA);

			$retornaNaturezas[] = $dadosNatureza;
		}
		return $retornaNaturezas;
	}
	public function inserirNatureza($arrayNatureza){
		$dadosNatureza = new Natureza();
		for($i=0; $i<count(arrayNatureza);$i++){
			$dadosNatureza->__setNatureza($arrayNatureza[$i]);
			$sql = "INSERT INTO categoria_id_categoria,natureza values ('{$dadosNatureza->__getNomeNatureza()}')";
			$this->conexao->Execute($sql);
		}
	}
}