<?php
include_once('C:/xampp/htdocs/mds2013/model/Categoria.php');
include_once('C:/xampp/htdocs/mds2013/persistence/Conexao.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/ECategoriaListarTodasVazio.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/ECategoriaListarTodasAlfabeticamenteVazio.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/ECategoriaListarConsultaPorIdVazio.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/ECategoriaConsultarPorNomeVazio.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EConexaoFalha.php');

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
		$sql = "SELECT * FROM categoria ORDER BY nome_categoria ASC";
		$resultado = $this->conexao->banco->Execute($sql);
		//if($resultado->RecordCount()== 0){
		//	throw new ECategoriaListarTodasAlfabeticamenteVazio();
		//}
		while($registro = $resultado->FetchNextObject())
		{
			$dadosCategoria = new Categoria();
			$dadosCategoria->__constructOverload($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA);
			$retornaCategorias[] = $dadosCategoria;
		}
		return $retornaCategorias;
	}
	public function consultarPorId($id){
		$sql = "SELECT * FROM categoria WHERE id_categoria = '".$id."'";
		$resultado = $this->conexao->banco->Execute($sql);
		//if($resultado->RecordCount()== 0){
			//throw new ECategoriaListarConsultaPorIdVazio();
		//}
		$registro = $resultado->FetchNextObject();
		$dadosCategoria = new Categoria();
		$dadosCategoria->__constructOverload($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA);
		return $dadosCategoria;
		
	}
	public function consultarPorNome($nomeCategoria){
		$sql = "SELECT * FROM categoria WHERE nome_categoria = '".$nomeCategoria."'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		//if($resultado->RecordCount()== 0){
			//throw new ECategoriaConsultarPorNomeVazio();
		//}
		$dadosCategoria = new Categoria();
		$dadosCategoria->__constructOverload($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA);
		return $dadosCategoria;
	}
	public function inserirCategoria(Categoria $categoria){
		$sql = "INSERT INTO categoria (nome_categoria) values ('{$categoria->__getNomeCategoria()}')";
		$resultado = $this->conexao->banco->Execute($sql);
		return $resultado;
		//if(!$this->banco->Connect($this->servidor,$this->usuario,$this->senha,$this->db)){
			//	throw new EConexaoFalha();	
			//}
	}
	public function contarRegistros(){
		$sql = "SELECT COUNT(id_categoria)AS total FROM categoria";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		return $registro->TOTAL;
	}
}