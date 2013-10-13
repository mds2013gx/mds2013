<?php
require_once 'libs/excel_reader2.php';
class Parse{
	private $natureza;
	private $tempo;
	private $crime;
	private $categoria;
	private $dados;
	
	public function __construct($planilha){
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
	//ParsePorSerieHistorica 
	public function parseDeSerieHistorica(){
		$numeroLinhas = 40;
		$numeroColunas = 15;
		//loop que pega a natureza
		for($i=0,$auxCategoria=0;$i<$numeroLinhas;$i++){
			if($i == 2){
				$this->categoria[$auxCategoria] = $this->dados->val($i,1,1);
				$auxCategoria++;
			}
			if($i == 33){
				$this->categoria[$auxCategoria] =  $this->dados->val($i,1,1);
				$auxCategoria++;
			}
			if($i == 38){
				$this->categoria[$auxCategoria] =  $this->dados->val($i,1,1);
			}
		} 
		//loop que pega natureza do crime
		for($i=1,$auxNatureza=0; $i<$numeroLinhas; $i++){
			if(($i == 1)||($i == 5)||($i == 21)||($i == 27)||($i == 28)||($i == 31)||($i == 32)||($i == 37)||($i == 40)){
				continue;
			}
			else{	
				if($i>32){
					$this->natureza[$auxNatureza]= $this->dados->val($i, 'B',1);
				}else{
					$this->natureza[$auxNatureza]= $this->dados->val($i, 'C',1);
				}
				$auxNatureza++;
			}
		}
		//loop que pega os anos disponiveis
		for($i=1,$auxTempo = 0; $i<$numeroColunas; $i++){
			if(($i == 1)||($i == 2)||($i == 3)){
				continue;
			}else{
				$this->tempo[$auxTempo] = $this->dados->val(1,$i,1);
				$auxTempo++;
			}
		}
		//loop que pega os dados do crime
		for($i=1,$auxLinha=0; $i<$numeroLinhas; $i++){	
			if(($i == 1)||($i == 5)||($i == 21)||($i == 27)||($i == 28)||($i == 31)||($i == 32)||($i == 37)||($i == 40)){
				continue;
			}else{	
				for($j=4,$auxColuna=0; $j<$numeroColunas; $j++){
						$this->crime[$this->__getNatureza()[$auxLinha]][$this->__getTempo()[$auxColuna]] = $this->dados->raw($i,$j,1);
						$auxColuna++;
				}
				$auxLinha++;
			}
		}
		
		print_r($this->__getCrime());
	}//fim do metodo parseDeSerieHistorica
	
	public function parsePorRegiao(){
		
	}
	
	public function parseDeQuadrimestre(){
		
	}
	
	public function __setNatureza($natureza){
		$this->natureza = $natureza;
	}
	
	public function __getNatureza(){
		return $this->natureza;
	}
	
	public function __setTempo($tempo){
		$this->tempo = $tempo;
	}
	
	public function __getTempo(){
		return $this->tempo;
	}
	
	public function __setCrime($crime){
		$this->crime = $crime;
	}
	
	public function __getCrime(){
		return $this->crime;
	}
	
	public function __setCategoria($categoria){
		$this->categoria = $categoria;
	}
	
	public function __getCategoria(){
		return $this->categoria;
	}
}