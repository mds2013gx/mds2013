<?php
	/**
	 * Classe Tempo Teste
	 **/
	require_once ('C:/xampp/htdocs/mds2013/model/Tempo.php');
	
	class TempoTeste extends PHPUnit_Framework_Testcase{
		
		public function setUp(){
			$this->tempo = new Tempo();
		}
		
		public function testSetIdTempo(){
			$this->tempo->__setIdTempo(1);
			$this->assertEquals(1, $this->tempo->__getIdTempo());
		}
		
		public function testSetIntervalo(){
			$this->tempo->__setIntervalo(1);
			$this->assertEquals(1,$this->tempo->__getIntervalo());
		}
		
		public function testConstructOverLoad(){
			$this->tempo->__constructOverload(1, 2);
			$this->assertEquals(1,$this->tempo->__getIdTempo());
			$this->assertEquals(2,$this->tempo->__getIntervalo());
		}
	}
?>