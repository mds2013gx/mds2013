<?php
include_once('../model/Crime.php');
class CrimeDAO{
	private $conexao;
	public function __construct(){
		$this->conexao = new Conexao();
	} 
	
	public function listarTodos(){
		$sql = "SELECT * FROM crime";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosCrime = new Crime($registro->ID_CRIME,$registro->TEMPO_ID_TEMPO,$registro->NATUREZA_ID_NATUREZA,$registro->QUANTIDADE);	
			$retornaCrimes[] = $dadosCrime;
		}
		return $retornaCrimes;
	} 
	public function consultarPorId($id){
		$sql = "SELECT * FROM crime WHERE id_crime = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosCrime = new Crime($registro->ID_CRIME,$registro->TEMPO_ID_TEMPO,$registro->NATUREZA_ID_NATUREZA,$registro->QUANTIDADE);
		return $dadosCrime;
	}
	public function consultarPorIdNatureza($id){
		$sql = "SELECT * FROM crime WHERE id_natureza = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosCrime = new Crime($registro->ID_CRIME,$registro->TEMPO_ID_TEMPO,$registro->NATUREZA_ID_NATUREZA,$registro->QUANTIDADE);
		return $dadosCrime;
	}
	public function consultarPorIdTempo($id){
		$sql = "SELECT * FROM crime WHERE id_tempo = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosCrime = new Crime($registro->ID_CRIME,$registro->TEMPO_ID_TEMPO,$registro->NATUREZA_ID_NATUREZA,$registro->QUANTIDADE);
		return $dadosCrime;
	}
	public function inserirCrime($arrayCrime){
		
	}
}