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
		$numeroLinhas = 40;
		$numeroColunas = 14;
		$numeroColunas = $this->dados->colcount();
		$natureza[];
		$tempo[];
		$crime[natureza][tempo][dado];
		//loop que pega natureza do crime
		for($i=0; $i<$numeroLinhas; $i++){
			if(($i == 5)||($i == 21)||($i == 28)||($i == 31)||($i == 32)||($i == 37)||($i == 40)){
				$i++;
			}
			else{	
				$natureza[$i]= $this->dados->val($i, C);
			}
		}
		//loop que pega os anos disponiveis
		for($i=0; $i<$numeroColunas; $i++){
			if(($i == 1)||($i == 2)||($i == 3)){
				$i++;
			}else{
				$tempo[$i] = $this->dados->val(1, $i);
			}
		}
		//loop que pega os dados do crime
		for($i=0; $i<strlen($natureza); $i++){
				if(($i == 5)||($i == 21)||($i == 28)||($i == 31)||($i == 32)||($i == 37)||($i == 40)){
					$i++;
				}else{
					for($j=0; $j=strlen($tempo); $i++){
						if(($j == 1)||($j == 2)||($j == 3)){
							$j++;
						}else{
							$crime[$i][$j][$this->dados->val($i,$j)];
						}
					}
				}
			}
		}
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