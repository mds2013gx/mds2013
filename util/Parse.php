<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/mds2013/exceptions/ENomePlanilhaIncompativel.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/mds2013/exceptions/EPlanilhaSerieIncompativel.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/mds2013/exceptions/EFalhaLeituraSerieCategoria.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/mds2013/exceptions/EFalhaLeituraSerieNatureza.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/mds2013/exceptions/EFalhaLeituraSerieTempo.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/mds2013/exceptions/EFalhaLeituraSerieCrime.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/mds2013/libs/excel_reader2.php');

class Parse{
	private $natureza;
	private $tempo;
	private $crime;
	private $categoria;
	private $dados;
	
	public function __construct($planilha){
		try{
			if($planilha = "série histórica - 2001 - 2012 2.xls"){
				$this->parseDeSerieHistorica();
			}
			else if($planilha = "JAN_SET_2011_12  POR REGIAO ADM_2.xls"){
				$this->parsePorRegiao();
			}
			else if($planilha = "Quadrimestre_final.2013"){
				$this->parseDeQuadrimestre();
			}
			else{
				throw ENomePlanilhaIncompativel();
			}		
			$this->dados = new Spreadsheet_Excel_Reader("files/".$planilha,"UTF-8");
		}
		catch(ENomePlanilhaIncompativel $e){
			echo $e->getMessage();
		}	
	}
	//ParsePorSerieHistorica 
	public function parseDeSerieHistorica(){
		try{
			if($this->dados->val(2, 1,1) != "Natureza"){
				throw EPlanilhaSerieIncompativel();
			}
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
			if(($this->__getCategoria() == null) || (empty($this->__getCategoria())== true) || (count($this->__getCategoria()) != 3)){
				throw new EFalhaLeituraSerieCategoria();
			} 
			//loop que pega natureza do crime
			for($i=1,$auxNatureza=0; $i<$numeroLinhas; $i++){
				if(($i == 1)||($i == 5)||($i == 21)||($i == 27)||($i == 28)||($i == 31)||($i == 32)||($i == 37)||($i == 40)){
					continue;
				}
				else{	
					if($i>32){
						if($i<37){
							$this->natureza[$this->__getCategoria()[1]][$auxNatureza]= $this->dados->val($i,'B',1);
						}else{
							$this->natureza[$this->__getCategoria()[2]][$auxNatureza]= $this->dados->val($i,'B',1);
						}
					}else{
						if($i<32){
							$this->natureza[$this->__getCategoria()[0]][$auxNatureza]= $this->dados->val($i,'C',1);
						}else if($i>32 && $i<37){
							$this->natureza[$this->__getCategoria()[1]][$auxNatureza]= $this->dados->val($i,'C',1);
						}else{
							$this->natureza[$this->__getCategoria()[2]][$auxNatureza]= $this->dados->val($i,'C',1);
						}
					}
					$auxNatureza++;
				}
			}
			if(($this->__getNatureza() == null) || (empty($this->__getNatureza()) == true) || (count($this->__getNatureza()[0]) !=25) || (count($this->__getNatureza()[1]) !=4) || (count($this->__getNatureza()[1]) != 2)){			
				throw new EFalhaLeituraSerieNatureza();
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
			if(($this->__getTempo() ==  null) || (empty($this->__getTempo())== true) || (count($this->__getTempo()) !=11)){
				throw EFalhaLeituraSerieTempo();
			}
			//loop que pega os dados do crime
			for($i=1,$auxLinha=0; $i<$numeroLinhas; $i++){	
				if(($i == 1)||($i == 5)||($i == 21)||($i == 27)||($i == 28)||($i == 31)||($i == 32)||($i == 37)||($i == 40)){
					continue;
				}else{	
					for($j=4,$auxColuna=0,$auxCategoria; $j<$numeroColunas; $j++){
							if($i<32){
								$auxCategoria = 0;
							}else if($i>32 && $i<37){
								$auxCategoria = 1;
							}else{
								$auxCategoria = 2;
							}
							$this->crime[$this->__getNatureza()[$this->__getCategoria()[$auxCategoria]][$auxLinha]][$this->__getTempo()[$auxColuna]] = $this->dados->raw($i,$j,1);
							$auxColuna++;
					}
					$auxLinha++;
				}
			}
			if(($this->__getCrime() ==  null) || (empty($this->__getCrime())== true)){
				throw EFalhaLeituraSerieCrime();
			}
		}catch(EPlanilhaSerieIncompativel $e){
			echo $e->getMessage();
		}catch (EFalhaLeituraSerieCategoria $e){
			echo $e->getMessage();
		}catch(EFalhaLeituraSerieNatureza $e){
			echo $e->getMessage();
		}catch(EFalhaLeituraSerieTempo $e){
			echo $e->getMessage();
		}catch(EFalhaLeituraSerieCrime $e){
			echo $e->getMessage();
		}
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

	public function somaLinhas($arrayCrime){
		$numeroLinhas = 31;
		$numeroColunas = 11;
		$soma;
		
		
		for($i=0;$i<$numeroLinhas;$i++){
			for($j=0;$j<$numeroColunas;$j++){
				$soma[$i] += $arrayCrime[$i][$j];				
			}
		}
		return $soma;
	}

	public function somaColunas($arrayCrime){
		$numeroLinhas = 31;
		$numeroColunas = 11;
		$soma;
	
	
		for($i=0;$i<$numeroColunas;$i++){
			for($j=0;$j<$numeroLinhas;$j++){
				$soma[$i] += $arrayCrime[$j][$i];
			}
		}
		return $soma;
	}
}