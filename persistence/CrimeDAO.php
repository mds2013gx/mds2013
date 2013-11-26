<?php
include_once('C:/xampp/htdocs/mds2013/model/Crime.php');
include_once('C:/xampp/htdocs/mds2013/model/Tempo.php');
include_once('C:/xampp/htdocs/mds2013/model/Natureza.php');
include_once('C:/xampp/htdocs/mds2013/persistence/Conexao.php');
include_once('C:/xampp/htdocs/mds2013/persistence/NaturezaDAO.php');
include_once('C:/xampp/htdocs/mds2013/persistence/TempoDAO.php');

class CrimeDAO{
	private $conexao;
	public function __construct(){
		$this->conexao = new Conexao();
	} 
	
	public function listarTodos(){
		$sql = "SELECT * FROM crime";
		$resultado = $this->conexao->banco->Execute($sql);
		if($resultado->RecordCount()== 0){
			throw new EcrimeListarTodosVazio();
		}
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
		if($resultado->RecordCount()== 0){
			throw new ECrimeConsultarPorIdVazio();
		}
		$registro = $resultado->FetchNextObject();
		$dadosCrime = new Crime();
		$dadosCrime->__constructOverload($registro->ID_CRIME,$registro->TEMPO_ID_TEMPO,$registro->NATUREZA_ID_NATUREZA,$registro->QUANTIDADE);
		return $dadosCrime;
	}
	public function consultarPorIdNatureza($id){
		$sql = "SELECT * FROM crime WHERE natureza_id_natureza = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		if($resultado->RecordCount()== 0){
			throw new ECrimeConsultarIdNaturezaVazio();
		}
		$registro = $resultado->FetchNextObject();
		$dadosCrime = new Crime();
		$dadosCrime->__constructOverload($registro->ID_CRIME,$registro->TEMPO_ID_TEMPO,$registro->NATUREZA_ID_NATUREZA,$registro->QUANTIDADE);
		return $dadosCrime;
	}
	public function consultarPorIdTempo($id){
		$sql = "SELECT * FROM crime WHERE tempo_id_tempo = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		if($resultado->RecordCount()== 0){
			throw new ECrimeConsultarIdTempoVazio();
		}
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

	//Metodo de somar todos homicícios por ano        
    /**
    * @author Lucas Andrade Ribeiro
    * @author Sergio Silva
    * @copyright RadarCriminal 2013
    **/

    //Somatorio Geral de todas as naturezas de crimes
    public function somaGeralCrimes(){
    	
    }


	public function somaTotalHomicidios(){
		$sql = "SELECT Sum(c.quantidade) as total FROM crime c, natureza n WHERE c.natureza_id_natureza = n.id_natureza AND n.id_natureza = 1";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		return $registro->TOTAL;
	}
	
	//Metodo de somar todos homicícios por ano        
    /**
    * @author Lucas Andrade Ribeiro
    * @author Sergio Silva
    * @copyright RadarCriminal 2013
    **/


	public function somaTotalRoubo(){
		$sql = "SELECT SUM(c.quantidade) AS total FROM crime c, natureza n WHERE c.natureza_id_natureza = n.id_natureza AND n.natureza LIKE '%Roubo%'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		return $registro->TOTAL;
	}

	public function somaTotalRoubo2010_2011(){
    	
    }

    public function somaGeralCrimeContraPessoa(){
    	
    }

    public function somaGeralCrimeContraPessoa2010_2011(){
    	
    }

    public function somaTotalFurtosContraPatrimonio(){
    	
    }

    public function omaTotalFurtosContraPatrimonio2010_2011(){
    	
    }

    public function somaTotalDignidadeSexual(){
    	
    }

    public function somaTotalDignidadeSexual2010_2011(){
    	
    }

    public function somaTotalAcaoPolicial(){
    	
    }

    public function somaTotalAcaoPolicial2010_2011(){
    	
    }

    public function somaTotalCrimeTransito(){
    	
    }

    public function somaTotalCrimeTransito2010_2011(){
    	
    }

	public function somaTotalFurtos(){
		$sql = "SELECT SUM(c.quantidade) AS total FROM crime c, natureza n WHERE c.natureza_id_natureza = n.id_natureza AND n.natureza LIKE '%Furto%'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		return $registro->TOTAL;
	}

	public function somaTotalFurtos2010_2011(){
    	
    }


	public function somaTotalTentativasHomicidio(){
		$sql = "SELECT SUM(c.quantidade) AS total FROM crime c, natureza n WHERE c.natureza_id_natureza = n.id_natureza AND n.id_natureza = 2";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		return $registro->TOTAL;
	}

	public function somaTotalTentativasHomicidio2010_2011(){
    	
    }

    public function somaLesaoCorporal(){
    	
    }

	public function somaLesaoCorporal2010_2011(){
		$sql = "SELECT SUM(c.quantidade) AS total FROM crime c, natureza n WHERE c.natureza_id_natureza = n.id_natureza AND n.id_natureza = 3";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		return $registro->TOTAL;
	}

	public function inserirCrime(Crime $crime){
		$sql = "INSERT INTO crime (natureza_id_natureza,tempo_id_tempo,quantidade) VALUES ('{$crime->__getIdNatureza()}','{$crime->__getIdTempo()}','{$crime->__getQuantidade()}')";
		$this->conexao->banco->Execute($sql);

		if(!$this->banco->Connect($this->servidor,$this->usuario,$this->senha,$this->db)){
				throw new EConexaoFalha();	
		}


		//if(!$this->banco->Connect($this->servidor,$this->usuario,$this->senha,$this->db)){
		//		throw new EConexaoFalha();	
		//}

	}
	
}