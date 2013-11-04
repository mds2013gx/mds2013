<?php
include_once(__APP_PATH.'/model/Crime.php');
include_once(__APP_PATH.'/model/Tempo.php');
include_once(__APP_PATH.'/model/Natureza.php');
include_once(__APP_PATH.'/persistence/Conexao.php');
include_once(__APP_PATH.'/persistence/NaturezaDAO.php');
include_once(__APP_PATH.'/persistence/TempoDAO.php');
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
			$dadosCrime = new Crime();
			$dadosCrime->__constructOverload($registro->ID_CRIME,$registro->TEMPO_ID_TEMPO,$registro->NATUREZA_ID_NATUREZA,$registro->QUANTIDADE);	
			$retornaCrimes[] = $dadosCrime;
		}
		return $retornaCrimes;
	} 
	public function consultarPorId($id){
		$sql = "SELECT * FROM crime WHERE id_crime = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosCrime = new Crime();
		$dadosCrime->__constructOverload($registro->ID_CRIME,$registro->TEMPO_ID_TEMPO,$registro->NATUREZA_ID_NATUREZA,$registro->QUANTIDADE);
		return $dadosCrime;
	}
	public function consultarPorIdNatureza($id){
		$sql = "SELECT * FROM crime WHERE id_natureza = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosCrime = new Crime();
		$dadosCrime->__constructOverload($registro->ID_CRIME,$registro->TEMPO_ID_TEMPO,$registro->NATUREZA_ID_NATUREZA,$registro->QUANTIDADE);
		return $dadosCrime;
	}
	public function consultarPorIdTempo($id){
		$sql = "SELECT * FROM crime WHERE id_tempo = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosCrime = new Crime();
		$dadosCrime->__constructOverload($registro->ID_CRIME,$registro->TEMPO_ID_TEMPO,$registro->NATUREZA_ID_NATUREZA,$registro->QUANTIDADE);
		return $dadosCrime;
	}
	public function somaDeCrimePorAno($ano){
		$sql = "SELECT Sum(c.quantidade) as total FROM crime c, tempo t WHERE c.tempo_id_tempo = t.id_tempo AND t.intervalo = $ano";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		return $registro->TOTAL; 
	}
	public function somaDeCrimePorNatureza($natureza){
		$sql = "SELECT Sum(c.quantidade) as total FROM crime c, natureza n WHERE c.natureza_id_natureza = n.id_natureza AND n.natureza = '".$natureza."'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		return $registro->TOTAL;
	}
	public function inserirCrime(Crime $crime){
		$sql = "INSERT INTO crime (natureza_id_natureza,tempo_id_tempo,quantidade) VALUES ('{$crime->__getIdNatureza()}','{$crime->__getIdTempo()}','{$crime->__getQuantidade()}')";
		$this->conexao->banco->Execute($sql);
	}
}