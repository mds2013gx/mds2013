<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/mds2013/model/Natureza.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/mds2013/model/Categoria.php');
include_once('Conexao.php');
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
			$dadosNatureza = new Natureza();
			$dadosNatureza->__constructOverload($registro->ID_NATUREZA,$registro->NATUREZA,$registro->CATEGORIA_ID_CATEGORIA);				
			$retornaNaturezas[] = $dadosNatureza;
		}
		return $retornaNaturezas;
	}
	public function listarTodasAlfabicamente(){
		$sql = "SELECT * FROM natureza ORDER BY natureza ASC ";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosNatureza = new Natureza();
			$dadosNatureza->__constructOverload($registro->ID_NATUREZA,$registro->NATUREZA,$registro->CATEGORIA_ID_CATEGORIA);
			$retornaNaturezas[] = $dadosNatureza;
		}
		return $retornaNaturezas;
	}
	public function consultarPorId($id){
		$sql = "SELECT * FROM natureza WHERE id_natureza = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosNatureza = new Natureza();
		$dadosNatureza->__constructOverload($registro->ID_NATUREZA,$registro->NATUREZA,$registro->CATEGORIA_ID_CATEGORIA);				
		return $dadosNatureza;

	}
	public function consultarPorNome($natureza){
		$sql = "SELECT * FROM natureza WHERE natureza = '".$natureza."'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosNatureza = new Natureza();
		$dadosNatureza->__constructOverload($registro->ID_NATUREZA,$registro->NATUREZA,$registro->CATEGORIA_ID_CATEGORIA);				
		return $dadosNatureza;
	}
	public function inserirNatureza(Natureza $natureza){
		$sql = "INSERT INTO natureza (categoria_id_categoria,natureza) values ('{$natureza->__getIdCategoria()}','{$natureza->__getNatureza()}')";
		$this->conexao->banco->Execute($sql);					
	}
}