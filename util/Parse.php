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
	
	public function __construct($planilha){
		try{
			$this->dados = new Spreadsheet_Excel_Reader("C:/xampp/htdocs/mds2013/files/".$planilha,"UTF-8");
			if($planilha == "série histórica - 2001 - 2012 2.xls"){
				$this->parseDeSerieHistorica();
			}
			else if($planilha == "JAN_SET_2011_12  POR REGIAO ADM_2.xls"){
				$this->parsePorRegiao();
			}
			else if($planilha == "Quadrimestre_final.2013.xls"){
				$this->parseDeQuadrimestre();
			}
			else{
				throw new ENomePlanilhaIncompativel();
			}		
			
		}
		catch(ENomePlanilhaIncompativel $e){
			echo $e->getMessage();
		}	
	}
	//ParsePorSerieHistorica 
	public function parseDeSerieHistorica(){
		try{
			if($this->dados->val(1,1,1) != "Natureza"){
				throw new EPlanilhaSerieIncompativel();
			}
			$numeroLinhas = 40;
			$numeroColunas = 15;
			//loop que pega a natureza
			for($i=0,$auxCategoria=0;$i<$numeroLinhas;$i++){
				
				if($i == 2){
					$this->categoria[$auxCategoria] = $this->dados->val($i,1,0);
					$auxCategoria++;
				}
				if($i == 33){
					$this->categoria[$auxCategoria] =  $this->dados->val($i,1,0);
					$auxCategoria++;
				}
				if($i == 38){
					$this->categoria[$auxCategoria] =  $this->dados->val($i,1,0);
				}
			}
			if(($this->__getCategoria() == null) || (count($this->__getCategoria()) != 3)){
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
							$this->natureza[$this->__getCategoria()[1]][$auxNatureza]= $this->dados->val($i,'B',0);
						}else{
							$this->natureza[$this->__getCategoria()[2]][$auxNatureza]= $this->dados->val($i,'B',0);
						}
					}else{
						if($i<32){
							$this->natureza[$this->__getCategoria()[0]][$auxNatureza]= $this->dados->val($i,'C',0);
						}else if($i>32 && $i<37){
							$this->natureza[$this->__getCategoria()[1]][$auxNatureza]= $this->dados->val($i,'C',0);
						}else{
							$this->natureza[$this->__getCategoria()[2]][$auxNatureza]= $this->dados->val($i,'C',0);
						}
					}
					$auxNatureza++;
				}
			}
			$criminalidade = utf8_encode("Criminalidade");
			$acao = utf8_encode("Ação Policial");
			$transito = utf8_encode("Trânsito");
			if(($this->__getNatureza() == null) || (count($this->__getNatureza()[$criminalidade]) != 25) || (count($this->__getNatureza()[$acao]) !=4) || (count($this->__getNatureza()[$transito]) != 2)){			
				throw new EFalhaLeituraSerieNatureza();
			}
			//loop que pega os anos disponiveis
			for($i=1,$auxTempo = 0; $i<$numeroColunas; $i++){
				if(($i == 1)||($i == 2)||($i == 3)){
					continue;
				}else{
					$this->tempo[$auxTempo] = $this->dados->val(1,$i,0);
					$auxTempo++;
				}
			}
			if(($this->__getTempo() ==  null) || (count($this->__getTempo()) !=11)){
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
							$this->crime[$this->__getNatureza()[$this->__getCategoria()[$auxCategoria]][$auxLinha]][$this->__getTempo()[$auxColuna]] = $this->dados->raw($i,$j,0);
							$auxColuna++;
					}
					$auxLinha++;
				}
			}
			if(($this->__getCrime() ==  null)){
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
	/**
	*	Desenvolvimento do método para efetuar parse da planilha de quadrimestre
	*	@access public
	*	@author Bruno Rodrigues
	*	@author Eliseu Egewarth
	*	@author Lucas Andrade	
	*	@author Lucas Carvalho
	*	@author Lucas Santos
	*	@author Sérgio Bezerra
	*	@author Thiago Honorato
	*	@tutorial Método realizado durante sprint 2, atulizando arrays para cada campo, para depois ir para persistência.
	*/
	public function parseDeQuadrimestre(){
		$numeroLinhas = 41;
		$numeroColunas = 14;
		/**
		* Loop para pegar os nomes das categorias contidas na planilha
		* @author Lucas Carvalho
		* @tutorial Refatoração do metodo antes implementados por outros autores 	 
		*/	
		for($i=0,$auxCategoria=0;$i<$numeroLinhas;$i++){
			if(($i == 8) || ($i == 12) || ($i == 34) || ($i == 35) || ($i == 36) || ($i == 37) || ($i == 39) ){
				$this->categoria[$auxCategoria] = $this->dados->val($i,1,2);
				$auxCategoria++;
			}else{
				continue;
			}
			
		}
		/**
		* Loop para pegar os nomes das naturezas contidas na planilha
		* @author Lucas Carvalho
		* @author Sérgio Bezerra
		* @tutorial Refatoração para ajustar dimenções do vetor natureza para diminuir a complexidade de população do vetor
		*/
		for($i=8,$auxNatureza=0;$i< $numeroLinhas;$i++){
		 		// Val ÃƒÂ© o valor da cÃƒÂ©lula que esta sendo armazenado na nova tabela val(linha, coluna, sheet)
		 		if($i>7 && $i<11){
		 			$this->natureza[$this->__getCategoria()[0]][$auxNatureza] =  $this->dados->val($i,'B',2);
		 			$auxNatureza++;
		 		}else if(($i>11 && $i<26) || ($i>26 && $i<31)){
		 			$this->natureza[$this->__getCategoria()[1]][$auxNatureza] =  $this->dados->val($i,'B',2);
		 			$auxNatureza++;
		 		}else if($i==34){
		 			$this->natureza[$this->__getCategoria()[2]][$auxNatureza] =  $this->dados->val($i,'B',2);
		 			$auxNatureza++;
		 		}else if($i==35){
		 			$this->natureza[$this->__getCategoria()[3]][$auxNatureza] =  $this->dados->val($i,'B',2);
		 			$auxNatureza++;
		 		}else if($i==36){
		 			$this->natureza[$this->__getCategoria()[4]][$auxNatureza] =  $this->dados->val($i,'B',2);
		 			$auxNatureza++;
		 		}else if($i==37){
		 			$this->natureza[$this->__getCategoria()[5]][$auxNatureza] =  $this->dados->val($i,'B',2);
		 			$auxNatureza++;
		 		}else if($i>38 && $i<41){
		 			$this->natureza[$this->__getCategoria()[6]][$auxNatureza] =  $this->dados->val($i,'B',2);
		 			$auxNatureza++;
		 		}else{
		 			continue;
		 		}
		} 		
		/**		 
		* Loop que pega as informações sobre tempo da planilha
		* @author Lucas Carvalho
		*/
		for($i=6, $auxTempo = 0; $i<$numeroColunas; $i++){
			if(($i % 2) == 0){
				$this->tempo[2013][$auxTempo] = $this->dados->val(6,$i,2);
				$auxTempo++;
			}
		}
		/**
		* Loop que pega as informações do crime da planilha
		* @author Lucas Carvalho 
		*/
		for($i = 0, $auxLinha = 0; $i<$numeroLinhas; $i++){
			if(($i< 8)||($i == 11)|| ($i == 26) || ($i == 31) || ($i == 32) || ($i == 37) || ($i == 40)){
				continue;
			}else{
				for($j = 6, $auxColuna = 0, $auxCategoria; $j<$numeroColunas; $j++){
					if(($j % 2) == 0){
						continue;
					}
					if($i>7 && $i<11){
						$auxCategoria = 0;
					}else if(($i>11 && $i<26) || ($i>26 && $i<31)){
						$auxCategoria = 1;
					}else if($i==34){
						$auxCategoria = 2;
					}else if($i==35){
						$auxCategoria = 3;
					}else if($i==36){
						$auxCategoria = 4;
					}else if($i==37){
						$auxCategoria = 5;
					}else if($i>38 && $i<41){
						$auxCategoria = 6;
					}
					$this->crime[$this->__getNatureza()[$this->__getCategoria()[$auxCategoria]][$auxLinha]][$this->__getTempo()[2013][$auxColuna]] = $this->dados->raw($i,$j,2);
					/**
					 * metodo __getNatureza() retorna um array, 
					 * porem um array de chave numerica. a chave passada no metodo é uma string.
					 * Possibilidades:
					 * 1)criar auxNatureza para navegar no array natureza.
					 * ...
					 * @author Eliseu
					 */
					
					echo "\n";
					echo "linha:".$auxLinha++."coluna:".$auxColuna++.": ".$this->crime[$this->__getNatureza()[$this->__getCategoria()[$auxCategoria]][$auxLinha]][$this->__getTempo()[2013][$auxColuna]];
					echo "\n";
					//print_r($this->__getNatureza());
				}	
				$auxLinha++;
			}
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
