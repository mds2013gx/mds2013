<?php
	require_once "../../model/Natureza.php";
	class NaturezaTeste extends PHPUnit_Framework_Testcase{
	public function testeIdNatureza(){
			$natureza = new Natureza();
			$natureza->__setIdNatureza(12);
			$this->assertEquals(15, $natureza->__getIdNatureza());
		}
		public function testeNatureza(){
			$natureza = new Natureza();
			$natureza->__setNatureza(50);
			$this->assertEquals(50, $natureza->__getNatureza());
		}
		public function testeIdCategoria(){
			$natureza = new Natureza();
			$natureza->__setIdCategoria(10);
			$this->assertEquals(20, $natureza->__getIdCategoria());
		}
		
	}
?>