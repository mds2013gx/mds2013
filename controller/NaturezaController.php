<?php
include_once('C:/xampp/htdocs/mds2013/persistence/NaturezaDAO.php');
include_once('C:/xampp/htdocs/mds2013/persistence/CategoriaDAO.php');
include_once('C:/xampp/htdocs/mds2013/model/Natureza.php');
include_once('C:/xampp/htdocs/mds2013/model/Categoria.php');
include_once('C:/xampp/htdocs/mds2013/controller/CrimeController.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EErroConsulta.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EFalhaNaturezaController.php');

class NaturezaController{
	private $naturezaDAO;
	
	public function __construct(){
		$this->naturezaDAO = new NaturezaDAO();
	}
	public function _listarTodas(){
		$resultado = $this->naturezaDAO->listarTodas();
		
		return $resultado;
	}
	public function _listarTodasAlfabicamente(){
		$resultado = $this->naturezaDAO->listarTodasAlfabicamente();
		return $resultado;
	}
	public function _consultarPorId($id){
		
		if(!is_numeric($id)){
			throw new EErroConsulta();
		}
		$natureza = $this->naturezaDAO->consultarPorId($id);
		return $natureza;
	}
	public function _consultarPorNome($natureza){
		
		$natureza = $this->naturezaDAO->consultarPorNome($natureza);
		return $natureza;
	}
	public function _consultarPorIdCategoria($id){
		return $this->naturezaDAO->consultarPorIdCategoria($id);
	}
	public function _inserirNatureza(Natureza $natureza){
		return $this->naturezaDAO->inserirNatureza($natureza);
	}
	public function _inserirArrayParse($arrayNatureza){
		
		if(!is_array($arrayNatureza)){
			throw new EFalhaNaturezaController();
		}
		for($i=0,$arrayKey = $arrayNatureza,$inicio = 0;$i<count($arrayNatureza);$i++){
			$chave = key($arrayKey);
			$categoriaDAO = new CategoriaDAO();
			$dadosCategoria = new Categoria();
			$dadosCategoria = $categoriaDAO->consultarPorNome($chave);
			for($j=$inicio;$j<(count($arrayNatureza[$chave])+$inicio);$j++){
				$dadosNatureza = new Natureza();
				$dadosNatureza->__setNatureza($arrayNatureza[$chave][$j]);
				$dadosNatureza->__setIdCategoria($dadosCategoria->__getIdCategoria());
				$this->naturezaDAO->inserirNatureza($dadosNatureza);
			}
			$inicio = $inicio+count($arrayNatureza[$chave]);
			next($arrayKey);
		}
		return $dadosCategoria;
	}
	public function _somaDeNaturezaPorAno($ano){
		return $this->naturezaDAO->somaDeNaturezaPorAno($ano);
	}
	public function _retornarDadosDeNaturezaFormatado(){
		$tempoDAO = new TempoDAO();
		$dadosTempo = new Tempo();
		$crimeCO = new CrimeController();
		$arrayDadosTempo = $tempoDAO->listarTodos();
		for($i=0; $i<count($arrayDadosTempo);$i++){
			$dadosTempo = $arrayDadosTempo[$i];
			$dados[$i] = $dadosTempo->__getIntervalo();
		}
		for($i=0;$i<count($dados);$i++){
			$dadosCrime[$i]= $crimeCO->_somaDeCrimePorNatureza('Estupro');
			$dadosCrimeTitle[$i] = number_format($dadosCrime[$i],0,',','.');
		}
	
	
	
		for($i=0;$i<count($dadosCrime); $i++){
			/**
			 * Laço que escreve os dados do grafico de ocorrencias por ano.
			 * a string ("\"bar\"") define a barra cheia do grafico e
			 * a string ("\"bar simple\"") define a barra pontilhada.
			 * A condicional 'if($i%2==0)' garante que as barras pontilhadas e cheias sejam intercaladas.
			 * Retorna-se o vetor de strings concatenado.
			 * @author Eliseu
			 * @copyright RadarCriminal 2013
			 */
			if($i%2==0){
				$varbar="\"bar\"";
			}else {
				$varbar="\"bar simple\"";
			}
			$dadosCrimeFormatado[]="
<div class=".$varbar."title=\"".$dadosCrimeTitle[$i]." Ocorrencias\">
<div class=\"title\">".$dados[$i]."</div>
<div class=\"value\">".$dadosCrime[$i]."</div>
</div>";
			if($i!=0)$dadosCrimeFormatado[0]=  $dadosCrimeFormatado[0].$dadosCrimeFormatado[$i];
		}
	
		return $dadosCrimeFormatado[0];
	
	}
}