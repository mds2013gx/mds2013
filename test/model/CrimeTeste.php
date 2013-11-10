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
			$crime->__setIdCrime("asdf");
			$this->assertEquals(null, $crime->__getIdCrime());
			$crime = new Crime();
			$crime->__setIdCrime(14.9);
			$this->assertEquals(null, $crime->__getIdCrime());
			$crime = new Crime();
			$crime->__setIdCrime($this);
			$this->assertEquals(null, $crime->__getIdCrime());
			$crime = new Crime();
			$crime->__setIdCrime($crime);
			$this->assertEquals(null, $crime->__getIdCrime());
			$crime = new Crime();
			$crime->__setIdCrime(10);
			$this->assertEquals(10, $crime->__getIdCrime());
			$crime = new Crime();
			$crime->__setIdCrime(100);
			$this->assertEquals(100, $crime->__getIdCrime());
			$crime = new Crime();
			$crime->__setIdCrime(0);
			$this->assertEquals(NULL, $crime->__getIdCrime());
			$this->assertEquals(NULL, 0);
			$crime = new Crime();
			$crime->__setIdCrime(50);
			$this->assertEquals(50, $crime->__getIdCrime());
				
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
