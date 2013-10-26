<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/mds2013/model/Categoria.php');
include_once('Conexao.php');
class CategoriaDAO{
	private $conexao;
	public function __construct(){
		$this->conexao = new Conexao();
	} 
	
	public function listarTodas(){
		$sql = "SELECT * FROM categoria";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosCategoria = new Categoria();
			$dadosCategoria->__constructOverload($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA);	
			$retornaCategorias[] = $dadosCategoria;
		}
		return $retornaCategorias;
	} 
	public function listarTodasAlfabicamente(){
		$sql = "SELECT * FROM categoria ORDER BY nome_categoria ASC ";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosCategoria = new Categoria();
			$dadosCategoria->__constructOverload($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA);
			$retornaCategorias[] = $dadosCategoria;
		}
		return $retornaCategorias;
	}
	public function consultarPorId($id){
		$sql = "SELECT * FROM categoria WHERE id_categoria = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosCategoria = new Categoria();
		$dadosCategoria->__constructOverload($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA);
		return $dadosCategoria;
		
	}
	public function consultarPorNome($nomeCategoria){
		$sql = "SELECT * FROM categoria WHERE nome_categoria = '".$nomeCategoria."'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosCategoria = new Categoria();
		$dadosCategoria->__constructOverload($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA);
		return $dadosCategoria;
	}
	public function inserirCategoria(Categoria $categoria){
		$sql = "INSERT INTO categoria (nome_categoria) values ('{$categoria->__getNomeCategoria()}')";
		$this->conexao->banco->Execute($sql);
	}
}