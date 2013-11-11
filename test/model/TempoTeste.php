<?php
	/**
	 * Classe Tempo Teste
	 **/
	require_once ($_SERVER['DOCUMENT_ROOT'].'/mds2013/model/Tempo.php');
	
	class TempoTeste extends PHPUnit_Framework_Testcase{
		
		public function testSetIdTempo(){
			$tempo = new Tempo();
			$tempo->__setIdTempo(1);
			$this->assertEquals(1, $tempo->__getIdTempo());
		}
		
		public function testSetIntervalo(){
			$tempo = new Tempo();
			$tempo->__setIntervalo(1);
			$this->assertEquals(1,$tempo->__getIntervalo());
		}
		
		public function testConstructOverLoad(){
			$tempo = new Tempo();
			$tempo->__constructOverload(1, 2);
			$this->assertEquals(1,$tempo->__getIdTempo());
			$this->assertEquals(2,$tempo->__getIntervalo());
		}
		
		
		
		
		
		
		
	}
?>