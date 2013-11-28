<?php

	require_once ('C:/xampp/htdocs/mds2013/model/Natureza.php');
	class NaturezaTeste extends PHPUnit_Framework_Testcase{
		
		public function setUp(){
			$this->natureza = new Natureza();
			
		}
		
	public function testeIdNatureza(){
			$this->natureza->__setIdNatureza(12);
			$this->assertEquals(12, $this->natureza->__getIdNatureza());
		}
		public function testeNatureza(){
			$this->natureza->__setNatureza(50);
			$this->assertEquals(50, $this->natureza->__getNatureza());
		}
		public function testeIdCategoria(){
			$this->natureza->__setIdCategoria(10);
			$this->assertEquals(10, $this->natureza->__getIdCategoria());
		}
		public function testeConstructOverLoad(){
			$this->natureza->__constructOverload(1, "natureza", 2);
			$this->assertEquals(1, $this->natureza->__getIdNatureza());
			$this->assertEquals("natureza", $this->natureza->__getNatureza());
			$this->assertEquals(2, $this->natureza->__getIdCategoria());
		}
	}
?>