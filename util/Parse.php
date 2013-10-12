<?php
require_once 'libs/excel_reader2.php';
class Parse{
	
	private $categoria;
	private $tempo;
	private $regiao;
	private $natureza;
	private $crime;
	private $dados;
	
	function __construct($planilha){
		$this->dados = new Spreadsheet_Excel_Reader("files/".$planilha,"UTF-8");
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
	//Parse 
	function parseDeSerieHistorica(){
		$numeroLinhas = 40;
		$numeroColunas = 15;
		$natureza;
		$tempo;
		$crime;
		//loop que pega natureza do crime
		for($i=1,$auxNatureza=0; $i<$numeroLinhas; $i++){
			if(($i == 1)||($i == 5)||($i == 21)||($i == 27)||($i == 28)||($i == 31)||($i == 32)||($i == 37)||($i == 40)){
				continue;
			}
			else{	
				if($i>32){
					$natureza[$auxNatureza]= $this->dados->val($i, 'B',1);
				}else{
					$natureza[$auxNatureza]= $this->dados->val($i, 'C',1);
				}
				$auxNatureza++;
			}
		}
		//loop que pega os anos disponiveis
		for($i=1,$auxTempo = 0; $i<$numeroColunas; $i++){
			if(($i == 1)||($i == 2)||($i == 3)){
				continue;
			}else{
				$tempo[$auxTempo] = $this->dados->val(1,$i,1);
				$auxTempo++;
			}
		}
		//loop que pega os dados do crime
		for($i=1,$auxLinha=0; $i<$numeroLinhas; $i++){	
			if(($i == 1)||($i == 5)||($i == 21)||($i == 27)||($i == 28)||($i == 31)||($i == 32)||($i == 37)||($i == 40)){
				continue;
			}else{	
				for($j=4,$auxColuna=0; $j<$numeroColunas; $j++){
						$crime[$auxLinha][$auxColuna] = $this->dados->raw($i,$j,1);
						$auxColuna++;
				}
				$auxLinha++;
			}
		}
		echo $natureza[0];
	}//fim do metodo parseDeSerieHistorica
	
		
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