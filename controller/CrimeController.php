<?php
include_once('C:/xampp/htdocs/mds2013/persistence/CrimeDAO.php');
include_once('C:/xampp/htdocs/mds2013/persistence/TempoDAO.php');
include_once('C:/xampp/htdocs/mds2013/persistence/NaturezaDAO.php');
include_once('C:/xampp/htdocs/mds2013/model/Crime.php');
include_once('C:/xampp/htdocs/mds2013/model/Tempo.php');
include_once('C:/xampp/htdocs/mds2013/model/Natureza.php');
class CrimeController{

	private $crimeDAO;

	public function __construct(){
		$this->crimeDAO = new CrimeDAO();
	}
	public function _listarTodos(){
		return $this->crimeDAO->listarTodos();
	}
	public function _consultarPorId($id){
		return $this->crimeDAO->consultarPorId($id);
	}
	public function _consultarPorIdNatureza($natureza){
		return $this->crimeDAO->consultarPorIdNatureza($natureza);
	}
	public function _consultarPorIdTempo($tempo){
		return $this->crimeDAO->consultarPorIdNatureza($tempo);
	}
	public function _inserirCrime(Crime $crime){
		return $this->crimeDAO->inserirCrime($crime);
	}

	public function _somaDeCrimePorNatureza($natureza){
		return $this->crimeDAO->somaDeCrimePorNatureza($natureza);
	}

	//Implementação de consultas para apresentacao na view | Apenas utilização de consultas já prontas
	/**
	 * @author Eduardo Augusto
	 * @author Sergio Silva
	 * @copyright RadarCriminal 2013
	 **/
	public function _somaDeCrimePorAno($ano){
		return $this->crimeDAO->somaDeCrimePorAno($ano);
	}

	/*public function _somaTotalTentativasHomicidio($ano){
	 return $this->crimeDAO->somaTotalTentativasHomicidio($ano);
	}*/

	/*public function _somaLesaoCorporal2010_2011($ano){
	 return $this->crimeDAO->somaLesaoCorporal2010_2011($ano);
	}*/

	/**
	 *Elaboracao de metodo para somatorio de todos os anos
	 * @author Sergio Bezerra da Silva
	 * @author Lucas Andrade Ribeiro
	 * @copyright RadarCriminal 2013
	 **/
	public function _somaCrimeTodosAnos(){
		for($i=2001; $i<2012; $i++){
			$somaTodosAnos[] = $this->_somaDeCrimePorAno($i);
		}

		$retornoSomaTodosAnos = array_sum($somaTodosAnos);
		return $retornoSomaTodosAnos;
	}

	public function _inserirCrimeArrayParseSerieHistorica($arrayCrime){
		for($i=0,$arrayKey = $arrayCrime,$inicio = 0;$i<count($arrayCrime);$i++){
			$natureza = key($arrayKey);
			$dadosNatureza = new Natureza();
			$naturezaDAO = new NaturezaDAO();
			$dadosNatureza = $naturezaDAO->consultarPorNome($natureza);
			$arrayTempo = $arrayCrime[$natureza];
			for($j=0;$j<count(array_keys($arrayCrime[$natureza]));$j++){
				$tempo = key($arrayTempo);
				$dadosTempo = new Tempo();
				$tempoDAO = new TempoDAO();
				$dadosTempo = $tempoDAO->consultarPorIntervalo($tempo);
				$dadosCrime = new Crime();
				$dadosCrime->__setIdNatureza($dadosNatureza->__getIdNatureza());
				$dadosCrime->__setIdTempo($dadosTempo->__getIdTempo());
				$dadosCrime->__setQuantidade($arrayCrime[$natureza][$tempo]);
				$this->crimeDAO->inserirCrime($dadosCrime);
				next($arrayTempo);
			}
			next($arrayKey);
		}
	}
	public function _inserirCrimeArrayParseQuadrimestral($arrayCrime){
		for($i=0,$arrayKey = $arrayCrime,$inicio = 0;$i<count($arrayCrime);$i++){
			$natureza = key($arrayKey);
			$dadosNatureza = new Natureza();
			$naturezaDAO = new NaturezaDAO();
			$dadosNatureza = $naturezaDAO->consultarPorNome($natureza);
			$arrayTempo = $arrayCrime[$natureza];
			for($j=0;$j<count(array_keys($arrayCrime[$natureza]));$j++){
				$tempo = key($arrayTempo);
				$dadosTempo = new Tempo();
				$tempoDAO = new TempoDAO();
				$dadosTempo = $tempoDAO->consultarPorMes($tempo);
				$dadosCrime = new Crime();
				$dadosCrime->__setIdNatureza($dadosNatureza->__getIdNatureza());
				$dadosCrime->__setIdTempo($dadosTempo->__getIdTempo());
				$dadosCrime->__setQuantidade($arrayCrime[$natureza][$tempo]);
				$this->crimeDAO->inserirCrime($dadosCrime);
				next($arrayTempo);
			}
			next($arrayKey);
		}
	}
	public function _inserirCrimeArrayParseRA($arrayCrime){
		for($i=0,$arrayKey = $arrayCrime,$inicio = 0;$i<count($arrayCrime);$i++){
			$natureza = key($arrayKey);
			$dadosNatureza = new Natureza();
			$naturezaDAO = new NaturezaDAO();
			$dadosNatureza = $naturezaDAO->consultarPorNome($natureza);
			$arrayRegiao = $arrayCrime[$natureza];
			for($j=0;$j<count(array_keys($arrayCrime[$natureza]));$j++){
				$regiao = key($arrayRegiao);
				$dadosRegiao = new RegiaoAdministrativa();
				$regiaoDAO = new RegiaoAdministrativaDAO();
				$dadosRegiao = $regiaoDAO->consultarPorNome($regiao);
				$arrayTempo = $arrayCrime[$natureza][$regiao];
				for($x = 0;$x<count(array_keys($arrayCrime[$natureza][$regiao])); $x++){
					$tempo = key($arrayTempo);
					$dadosTempo = new Tempo();
					$tempoDAO = new TempoDAO();
					$dadosTempo = $tempoDAO->consultarPorIntervalo($tempo);
					$dadosCrime = new Crime();
					$dadosCrime->__setIdNatureza($dadosNatureza->__getIdNatureza());
					$dadosCrime->__setIdRegiaoAdministrativa($dadosRegiao->__getIdRegiaoAdministrativa());
					$dadosCrime->__setIdTempo($dadosTempo->__getIdTempo());
					$dadosCrime->__setQuantidade($arrayCrime[$natureza][$regiao][$tempo]);
					$this->crimeDAO->inserirCrime($dadosCrime);
					next($arrayTempo);
				}
				
				next($arrayRegiao);
			}
			next($arrayKey);
		}
	}
	public function _retornarDadosDeSomaFormatado(){
		$tempoDAO = new TempoDAO();
		$dadosTempo = new Tempo();
		$arrayDadosTempo = $tempoDAO->listarTodos();
		for($i=0; $i<count($arrayDadosTempo);$i++){
			$dadosTempo = $arrayDadosTempo[$i];
			$dados[$i] = $dadosTempo->__getIntervalo();
		}
		for($i=0;$i<count($dados);$i++){
			$dadosCrime[$i]= $this->_somaDeCrimePorAno($dados[$i]);
		}
		return "data : [$dadosCrime[0],$dadosCrime[1],$dadosCrime[2],$dadosCrime[3],$dadosCrime[4],$dadosCrime[5],$dadosCrime[6],$dadosCrime[7],$dadosCrime[8],$dadosCrime[9],$dadosCrime[10]]";
	}

	//Metodo duplicado para adaptacao do retorno de dados para a nova interface
	/**
	 * @author Eduardo Augusto
	 * @author Sergio Silva
	 * @author Eliseu Egewarth
	 * @copyright RadarCriminal 2013
	 **/
	public function _retornarDadosDeSomaFormatoNovo(){
		$tempoDAO = new TempoDAO();
		$dadosTempo = new Tempo();
		$arrayDadosTempo = $tempoDAO->listarTodos();
		for($i=0; $i<count($arrayDadosTempo);$i++){
			$dadosTempo = $arrayDadosTempo[$i];
			$dados[$i] = $dadosTempo->__getIntervalo();
		}
		for($i=0;$i<count($dados);$i++){
			$dadosCrime[$i]= $this->_somaDeCrimePorAno($dados[$i]);
			$dadosCrimeTitle[$i] = number_format($dadosCrime[$i],0,',','.');
		}
		
		
		
		for($i=0;$i<count($dadosCrime); $i++){
			/**
			 * La�o que escreve os dados do grafico de ocorrencias por ano.
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
	//Metodo de somar todos homicícios por ano
	/**
	 * @author Lucas Andrade Ribeiro
	 * @author Sergio Silva
	 * @copyright RadarCriminal 2013
	 **/

	public function _somaHomicidios2010_2011(){
		for($i=2010; $i<2012; $i++){
			$somaHomicidios2010_2011[] = $this->crimeDAO->somaTotalHomicidios($i);
		}

		$retornoHomicidios2010_2011 = array_sum($somaHomicidios2010_2011);
		return $retornoHomicidios2010_2011;
	}
	
	public function _somaCrime2010_2011(){
		for($i=2010;$i<2012;$i++){
			$somaCrime2010_2011[] = $this->_somaDeCrimePorAno($i);
		}
		$retornoSomaCrime2010_2011 = array_sum($somaCrime2010_2011);
		return $retornoSomaCrime2010_2011;
	}
	
	public function _somaTotalHomicidios(){
		for($i=2001; $i<2012; $i++){
			$somaTotalHomicidios[] = $this->crimeDAO->somaTotalHomicidios($i);
		}

		$retornoSomaTotalHomicidios = array_sum($somaTotalHomicidios);
		return $retornoSomaTotalHomicidios;
	}

	public function _somaGeralCrimeContraPessoa(){
		for($i=2001; $i<2012; $i++){
			$somaGeralCrimeContraPessoa[] = $this->crimeDAO->somaGeralCrimeContraPessoa($i);
		}
		$retornoSomaGeralCrimeContraPessoa = array_sum($somaGeralCrimeContraPessoa);
		return $retornoSomaGeralCrimeContraPessoa;
	}

	public function _somaGeralCrimeContraPessoa2010_2011(){
		for($i=2010; $i<2012; $i++){
			$somaGeralCrimeContraPessoa2010_2011[] = $this->crimeDAO->somaGeralCrimeContraPessoa($i);
		}
		$retornoSomaGeralCrimeContraPessoa2010_2011 = array_sum($somaGeralCrimeContraPessoa2010_2011);
		return $retornoSomaGeralCrimeContraPessoa2010_2011;
	}

	public function _somaTotalRoubo(){
		for($i=2001; $i<2012; $i++){
			$somaTotalRoubo[] = $this->crimeDAO->somaTotalRoubo($i);
		}
		$retornoSomaTotalRoubo = array_sum($somaTotalRoubo);
		return $retornoSomaTotalRoubo;
	}

	public function _somaTotalRoubo2010_2011(){
		for($i=2010; $i<2012; $i++){
			$somaTotalRoubo2010_2011[] = $this->_somaTotalRoubo($i);
		}
		$retornoSomaTotalRoubo2010_2011 = array_sum($somaTotalRoubo2010_2011);
		return $retornoSomaTotalRoubo2010_2011;
	}

	public function _somaTotalFurtos(){
		for($i=2010; $i<2012; $i++){
			$somaTotalFurtos[] = $this->crimeDAO->somaTotalFurtos($i);
		}
		$retornoSomaTotalFurtos = array_sum($somaTotalFurtos);
		return $retornoSomaTotalFurtos;
	}

	public function _somaLesaoCorporal(){
		for($i=2001; $i<2012; $i++){
			$somaLesaoCorporal[] = $this->crimeDAO->somaLesaoCorporal($i);
		}
		$retornoSomaLesaoCorporal = array_sum($somaLesaoCorporal);
		return $retornoSomaLesaoCorporal;
	}

	public function _somaLesaoCorporal2010_2011(){
		for($i=2010; $i<2012; $i++){
			$somaLesaoCorporal2010_2011[] = $this->_somaLesaoCorporal($i);
		}
		$retornoLesaoCorporal2010_2011 = array_sum($somaLesaoCorporal2010_2011);
		return $retornoLesaoCorporal2010_2011;
	}


	public function _somaTotalTentativasHomicidio(){
		for($j=2001; $j<2012; $j++){
			$somaTotalTentativasHomicidio[] = $this->_somaTotalTentativasHomicidio($j);
		}
		$retornoSomaTotalTentativasHomicidio = array_sum($somaTotalTentativasHomicidio);
		return $retornoSomaTotalTentativasHomicidio;
	}

	public function _somaTotalTentativasHomicidio2010_2011(){
		for($i=2010; $i<2012; $i++){
			$somaTotalTentativasHomicidio2010_2011[] = $this->crimeDAO->somaTotalTentativasHomicidio($i);
		}
		$retornoSomaTotalTentativasHomicidio2010_2011 = array_sum($somaTotalTentativasHomicidio2010_2011);
		return $retornoSomaTotalTentativasHomicidio2010_2011;
	}

	public function _somaTotalDignidadeSexual(){
		$somaDignidadeSexual;
		for($i=2001; $i<2012; $i++){
			$somaDignidadeSexual[] = $this->_somaTotalDignidadeSexual($i);
		}
		$retornoSomaTotalDignidadeSexual = array_sum($somaDignidadeSexual);
		return $retornoSomaTotalDignidadeSexual;
	}

	public function _somaTotalDignidadeSexual2010_2011(){
		for($i=2010; $i<2012; $i++){
			$somaTotalDignidadeSexual2010_2011[] = $this->_somaTotalDignidadeSexual($i);
		}
		$retornoSomaTotalDignidadeSexual2010_2011 = array_sum($somaTotalDignidadeSexual2010_2011);
		return $retornoSomaTotalDignidadeSexual2010_2011;
	}

	public function _somaTotalAcaoPolicial(){
		for($i=2001; $i<2012; $i++){
			$somaTotalAcaoPolicial[] = $this->_somaTotalAcaoPolicial($i);
		}
		$retornoSomaTotalAcaoPolicial = array_sum($somaTotalAcaoPolicial);
		return $retornoSomaTotalAcaoPolicial;
	}

	public function _somaTotalAcaoPolicial2010_2011(){
		for($i=2010; $i<2012; $i++){
			$somaTotalAcaoPolicial2010_2011[] = $this->_somaTotalAcaoPolicial($i);
		}
		$retornoSomaTotalAcaoPolicial2010_2011 = array_sum($somaTotalAcaoPolicial2010_2011);
		return $retornoSomaTotalAcaoPolicial2010_2011;
	}
	public function _somarGeral(){
		return $this->crimeDAO->somarGeral();
	}



}