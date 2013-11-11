<?php
	require_once "../../model/Natureza.php";
	class NaturezaTeste extends PHPUnit_Framework_Testcase{
	public function testeIdNatureza(){
			$natureza = new Natureza();
			$natureza->__setIdNatureza(12);
			$this->assertEquals(12, $natureza->__getIdNatureza());
		}
		public function testeNatureza(){
			$natureza = new Natureza();
			$natureza->__setNatureza(50);
			$this->assertEquals(50, $natureza->__getNatureza());
		}
		public function testeIdCategoria(){
			$natureza = new Natureza();
			$natureza->__setIdCategoria(10);
			$this->assertEquals(10, $natureza->__getIdCategoria());
		}
		public function testeConstructOverLoad(){
			$natureza = new Natureza();
			$natureza->__constructOverload(1, "natureza", 2);
			$this->assertEquals(1, $natureza->__getIdNatureza());
			$this->assertEquals("natureza", $natureza->__getNatureza());
			$this->assertEquals(2, $natureza->__getIdCategoria());
		}
	}
?>