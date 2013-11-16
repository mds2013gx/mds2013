<?php
require_once ('C:/xampp/htdocs/mds2013/exceptions/ENomePlanilhaIncompativel.php');
require_once ('C:/xampp/htdocs/mds2013/exceptions/EPlanilhaSerieIncompativel.php');
require_once ('C:/xampp/htdocs/mds2013/exceptions/EFalhaLeituraSerieCategoria.php');
require_once ('C:/xampp/htdocs/mds2013/exceptions/EFalhaLeituraSerieNatureza.php');
require_once ('C:/xampp/htdocs/mds2013/exceptions/EFalhaLeituraSerieTempo.php');
require_once ('C:/xampp/htdocs/mds2013/exceptions/EFalhaLeituraSerieCrime.php');
require_once ('C:/xampp/htdocs/mds2013/libs/excel_reader2.php');

class Parse{
	private $natureza;
	private $tempo;
	private $crime;
	private $categoria;
	private $dados;
	private $total;
	private $mes;
	
	public function __construct($planilha){
		try{
			if($planilha = "s�rie hist�rica - 2001 - 2012 2.xls"){
				$this->parseDeSerieHistorica();
			}
			else if($planilha = "JAN_SET_2011_12  POR REGIAO ADM_2.xls"){
				$this->parsePorRegiao();
			}
			else if($planilha = "Quadrimestre_final.2013"){
				$this->parseDeQuadrimestre();
			}
			else{
				throw new ENomePlanilhaIncompativel();
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
			//if($this->dados->val(2, 1,1) != "Natureza"){
			//	throw new EPlanilhaSerieIncompativel();
			//}
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
			//if(($this->__getCategoria() == null) || (empty($this->__getCategoria())== true) || (count($this->__getCategoria()) != 3)){
			//	throw new EFalhaLeituraSerieCategoria();
			//} 
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
			//if(($this->__getNatureza() == null) || (empty($this->__getNatureza()) == true) || (count($this->__getNatureza()[0]) !=25) || (count($this->__getNatureza()[1]) !=4) || (count($this->__getNatureza()[1]) != 2)){			
			//	throw new EFalhaLeituraSerieNatureza();
			//}
			//loop que pega os anos disponiveis
			for($i=1,$auxTempo = 0; $i<$numeroColunas; $i++){
				if(($i == 1)||($i == 2)||($i == 3)){
					continue;
				}else{
					$this->tempo[$auxTempo] = $this->dados->val(1,$i,1);
					$auxTempo++;
				}
			}
			//if(($this->__getTempo() ==  null) || (empty($this->__getTempo())== true) || (count($this->__getTempo()) !=11)){
			//	throw EFalhaLeituraSerieTempo();
			//}
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
			//if(($this->__getCrime() ==  null) || (empty($this->__getCrime())== true)){
			//	throw EFalhaLeituraSerieCrime();
			//}
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
		$numeroLinhas = 41;
		$numeroColunas = 13;
		
		//Loop para pegar os nomes das categorias de tabela parserQuadrimestral	
		for($i=0,$auxCategoria=0;$i<$numeroLinhas;$i++){
			if($i == 8){
				$this->categoria[$auxCategoria] = $this->dados->val($i,1,2);
				$auxCategoria++;
			}
			if($i == 12){
				$this->categoria[$auxCategoria] =  $this->dados->val($i,1,2);
				$auxCategoria++;
			}
			if($i == 34){
				$this->categoria[$auxCategoria] =  $this->dados->val($i,1,2);
				$auxCategoria++;
			}

			if($i == 35){
				$this->categoria[$auxCategoria] =  $this->dados->val($i,1,2);
				$auxCategoria++;
			}
			
			if($i == 36){
				$this->categoria[$auxCategoria] =  $this->dados->val($i,1,2);
				$auxCategoria++;
			}

			if($i == 37){
				$this->categoria[$auxCategoria] =  $this->dados->val($i,1,2);
				$auxCategoria++;
			}
			
			if($i == 39){
				$this->categoria[$auxCategoria] =  $this->dados->val($i,1,2);
			}
			

		}
		// loop de natureza
		$auxNatureza1=0;
		$auxNatureza2=0;
		$auxNatureza3=0;

		 for($i=8,$auxNatureza=0;$i< $numeroLinhas;$i++){
		 		if($i==11) continue;
		 		if($i==26) continue;
		 		if($i==31 || $i==32 || $i==33 || $i==38 || $i==41) continue;

		 		// Val Ã© o valor da cÃ©lula que esta sendo armazenado na nova tabela val(linha, coluna, sheet)
		 		if ($i>7 && $i<11){
		 			$this->natureza[$this->__getCategoria()[0][$auxNatureza1]] =  $this->dados->val($i,2,2);
		 			$auxNatureza1++;
		 		}
		 		else if ($i>11 && $i<32){
		 			$this->natureza[$this->__getCategoria()[1][$auxNatureza2]] =  $this->dados->val($i,2,2);
		 			$auxNatureza2++;

		 		}

		 		else if ($i==34){
		 			$this->natureza[$this->__getCategoria()[2][0]] =  $this->dados->val($i,2,2);
		 		}
		 		else if ($i==35){
		 			$this->natureza[$this->__getCategoria()[3][0]] =  $this->dados->val($i,2,2);
		 		}
		 		else if ($i==36){
		 			$this->natureza[$this->__getCategoria()[4][0]] =  $this->dados->val($i,2,2);
		 		}
		 		else if ($i==37){
		 			$this->natureza[$this->__getCategoria()[5][0]] =  $this->dados->val($i,2,2);
		 		}
		 		else if ($i>38 && $i<41){
		 			$this->natureza[$this->__getCategoria()[6][$auxNatureza3]] =  $this->dados->val($i,2,2);
		 			//echo $this->natureza[$this->__getCategoria()[6][$auxNatureza3]];
		 			$auxNatureza3++;
		 		}

		 }
		 //Loop de total 2012
		 for($i=8,$auxAno2012=0;$i< $numeroLinhas;$i++){
		 		if($i==11) continue;
		 		if($i==26) continue;
		 		if($i==31 || $i==32 || $i==33 || $i==38 || $i==41) continue;

		 		$this->total['Ano2012'][$auxAno2012] =  $this->dados->val($i,3,2);
		 		$auxAno2012++;
		 }
		 //Loop de total 2013
		 for($i=8,$auxAno2013=0;$i< $numeroLinhas;$i++){
		 		if($i==11) continue;
		 		if($i==26) continue;
		 		if($i==31 || $i==32 || $i==33 || $i==38 || $i==41) continue;

		 		$this->total['Ano2013'][$auxAno2013] =  $this->dados->val($i,4,2);
		 		//echo $this->total['Ano2013'][$auxAno2013]."<br>";
		 		$auxAno2013++;
		 }
		 //Loop de Janeiro 2012
		 for($i=8,$auxAno2012=0;$i< $numeroLinhas;$i++){
		 		if($i==11) continue;
		 		if($i==26) continue;
		 		if($i==31 || $i==32 || $i==33 || $i==38 || $i==41) continue;

		 		$this->mes[0][0][$auxAno2012] =  $this->dados->val($i,6,2);
		 		$auxAno2012++;
		 }

		 //Loop de Janeiro 2013
		 for($i=8,$auxAno2013=0;$i< $numeroLinhas;$i++){
		 		if($i==11) continue;
		 		if($i==26) continue;
		 		if($i==31 || $i==32 || $i==33 || $i==38 || $i==41) continue;

		 		$this->mes[0][1][$auxAno2013] =  $this->dados->val($i,7,2);
		 		//echo $this->mes['Janeiro']['ano2013'][$auxAno2013]."<br>";
		 		$auxAno2013++;
		 }

		 //Loop de Fevereiro 2012
		 for($i=8,$auxAno2012=0;$i< $numeroLinhas;$i++){
		 		if($i==11) continue;
		 		if($i==26) continue;
		 		if($i==31 || $i==32 || $i==33 || $i==38 || $i==41) continue;

		 		$this->mes[1][0][$auxAno2012] =  $this->dados->val($i,8,2);
		 		//echo $this->mes['Fevereiro']['ano2012'][$auxAno2012]."<br>";
		 		$auxAno2012++;
		 }

		  //Loop de Fevereiro 2013
		 for($i=8,$auxAno2013=0;$i< $numeroLinhas;$i++){
		 		if($i==11) continue;
		 		if($i==26) continue;
		 		if($i==31 || $i==32 || $i==33 || $i==38 || $i==41) continue;

		 		$this->mes[1][1][$auxAno2013] =  $this->dados->val($i,9,2);
		 		//echo $this->mes['Fevereiro']['ano2013'][$auxAno2013]."<br>";
		 		$auxAno2013++;
		 }
		 //Loop de marÃ§o 2012
		 for($i=8,$auxAno2012=0;$i< $numeroLinhas;$i++){
		 		if($i==11) continue;
		 		if($i==26) continue;
		 		if($i==31 || $i==32 || $i==33 || $i==38 || $i==41) continue;

		 		$this->mes[2][0][$auxAno2012] =  $this->dados->val($i,10,2);
		 		//echo $this->mes['Marco']['ano2012'][$auxAno2012]."<br>";
		 		$auxAno2012++;
		 }

		  //Loop de marÃ§o 2013
		 for($i=8,$auxAno2013=0;$i< $numeroLinhas;$i++){
		 		if($i==11) continue;
		 		if($i==26) continue;
		 		if($i==31 || $i==32 || $i==33 || $i==38 || $i==41) continue;

		 		$this->mes[2][1][$auxAno2013] =  $this->dados->val($i,11,2);
		 		//echo $this->mes['Marco']['ano2013'][$auxAno2013]."<br>";
		 		$auxAno2013++;
		 }
		//Loop de Abril 2012
		 for($i=8,$auxAno2012=0;$i< $numeroLinhas;$i++){
		 		if($i==11) continue;
		 		if($i==26) continue;
		 		if($i==31 || $i==32 || $i==33 || $i==38 || $i==41) continue;

		 		$this->mes[3][0][$auxAno2012] =  $this->dados->val($i,12,2);
		 		//echo $this->mes['Abril']['ano2012'][$auxAno2012]."<br>";
		 		$auxAno2012++;
		 }

		  //Loop de Abril 2013
		 for($i=8,$auxAno2013=0;$i< $numeroLinhas;$i++){
		 		if($i==11) continue;
		 		if($i==26) continue;
		 		if($i==31 || $i==32 || $i==33 || $i==38 || $i==41) continue;

		 		$this->mes[3][1][$auxAno2013] =  $this->dados->val($i,13,2);
		 		//echo $this->mes['Abril']['ano2013'][$auxAno2013]."<br>";
		 		$auxAno2013++;
		 }
		 
		
		//Loop que popula a matriz de crime
		for($i = 8,$auxHilmer = 0,$auxCategoria=0,$auxTorradas=0, $auxLinha=0; $i<$numeroLinhas;$i++,$auxTorradas++){
			if($i==11|| $i==26|| $i==31 ||  $i==32 || $i==33 || $i==38 || $i==41) continue;
			//for($j=6, $auxCategoria=0,$auxTorradas = 0; $j<$numeroColunas; $j++, $auxTorradas++){
				
				if($i<11 && $i>7){
					$auxCategoria=0;
				}

				else if($i>11 && $i<31){
					$auxCategoria=1;
				}

				else if($i==34){
					$auxCategoria=2;	
				}

				else if($i==35){
					$auxCategoria=3;
				}

				else if($i==36){
					$auxCategoria=4;
				}

				else if($i==37){
					$auxCategoria=5;
				}
				else if($i>38 && $i<41){
					$auxCategoria=6;
				}
				//essa parte mostra aonde estah errado
				echo $this->__getNatureza()[$this->__getCategoria()[0][0]];
				//echo $this->__getNatureza()[$this->__getCategoria()[$auxCategoria][$auxTorradas]]."<br>";
				//echo $this->crime[$this->__getNatureza()[$this->__getCategoria()[$auxCategoria][$auxLinha] ]] [$this->mes[$auxMes][$auxAno]];
		}
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
