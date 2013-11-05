<?php
	/**
	 * Classe Crime Teste
	 **/
	require_once "../../model/Crime.php";
	
	class CrimeTeste extends PHPUnit_Framework_Testcase{
		public function testeIdCrime(){
			$crime = new Crime();
			$crime->__setIdCrime(15);
			$this->assertEquals(15, $crime->__getIdCrime());
		}
		public function testeQuantidade(){
			$crime = new Crime();
			$crime->__setQuantidade(15);
			$this->assertEquals(15, $crime->__getQuantidade());
		}
		public function testeIdTempo(){
			$crime = new Crime();
			$crime->__setIdTempo(15);
			$this->assertEquals(15, $crime->__getIdTempo());
		}
		public function testeIdNatureza(){
			$crime = new Crime();
			$crime->__setIdNatureza(15);
			$this->assertEquals(15, $crime->__getIdNatureza());
		}
	}
?>