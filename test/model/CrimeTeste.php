<?php
	/**
	 * @author Eliseu
	 * Classe Crime Teste
	 **/
	require_once "../../model/Crime.php";
	
	class CrimeTeste extends PHPUnit_Framework_Testcase{
		public function testeAtributoIdCrime(){
			$crime = new Crime();
			$crime->__setIdCrime(15);
			$this->assertEquals(15, $crime->__getIdCrime());
		}
		public function testeAtributoQuantidade(){
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
		public function testeConstructOverLoad(){
			$crime = new Crime();
			$crime->__constructOverload(1,2,3,4);
			$this->assertEquals(1, $crime->__getIdCrime());
			$this->assertEquals(2, $crime->__getIdTempo());
			$this->assertEquals(3, $crime->__getIdNatureza());
			$this->assertEquals(4, $crime->__getQuantidade());
		}
	}
?>
