<?php
require_once 'excel_reader2.php';
class Parse{
	
	private $categoria;
	private $tempo;
	private $regiao;
	private $natureza;
	private $crime;
	private $dados;
	
	function Parse($planilha)
	{
		$this->dados = new Spreadsheet_Excel_Reader($planilha);
		if($planilha = "série histórica - 2001 - 2012 2.xls"){
			$this->parseDeSerieHistorica();
		}
		else if($planilha = "JAN_SET_2011_12  POR REGIAO ADM_2.xls"){
			$this->parsePorRegiao();
		}
		else{
			$this->parseDeQuadrimestre();
		}	
	}
	
	function parseDeSerieHistorica(){
		
	}
	
	function parsePorRegiao(){
		
	}
	
	function parseDeQuadrimestre(){
		
	}
	function inserirCategoria(){
		
	}
	function inserirTempo(){
		
	}
	function inserirRegiao(){
		
	}
	function inserirNatureza(){
		
	}
	function inserirCrime(){
		
	}
	
}