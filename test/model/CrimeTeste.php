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
			$crime = new Crime();
			$crime->__setIdCrime(10);
			$this->assertEquals(10, $crime->__getIdCrime());
			$crime = new Crime();
			$crime->__setIdCrime(100);
			$this->assertEquals(100, $crime->__getIdCrime());
			$crime = new Crime();
			$crime->__setIdCrime(50);
			$this->assertEquals(50, $crime->__getIdCrime());
				
		}
		public function testeAtributoQuantidade(){
			$crime = new Crime();
			$crime->__setQuantidade(15);
			$this->assertEquals(15, $crime->__getQuantidade());
			$crime = new Crime();
			$crime->__setQuantidade(10);
			$this->assertEquals(10, $crime->__getQuantidade());
			$crime = new Crime();
			$crime->__setQuantidade(100);
			$this->assertEquals(100, $crime->__getQuantidade());
			$crime = new Crime();
			$crime->__setQuantidade(50);
			$this->assertEquals(50, $crime->__getQuantidade());
		}
		public function testeIdTempo(){
			$crime = new Crime();
			$crime->__setIdTempo(15);
			$this->assertEquals(15, $crime->__getIdTempo());
			$crime = new Crime();
			$crime->__setIdTempo(15);
			$this->assertEquals(15, $crime->__getIdTempo());
			$crime = new Crime();
			$crime->__setIdTempo(10);
			$this->assertEquals(10, $crime->__getIdTempo());
			$crime = new Crime();
			$crime->__setIdTempo(100);
			$this->assertEquals(100, $crime->__getIdTempo());
			$crime = new Crime();
			$crime->__setIdTempo(50);
			$this->assertEquals(50, $crime->__getIdTempo());
		}
		public function testeIdNatureza(){
			$crime = new Crime();
			$crime->__setIdNatureza(15);
			$this->assertEquals(15, $crime->__getIdNatureza());
			$crime = new Crime();
			$crime->__setIdNatureza(10);
			$this->assertEquals(10, $crime->__getIdNatureza());
			$crime = new Crime();
			$crime->__setIdNatureza(100);
			$this->assertEquals(100, $crime->__getIdNatureza());
			$crime = new Crime();
			$crime->__setIdNatureza(50);
			$this->assertEquals(50, $crime->__getIdNatureza());
		}
	}
?>
