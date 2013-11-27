<?php
	/**
	 * @author Eliseu
	 * Classe Crime Teste
	 **/
	require_once ('C:/xampp/htdocs/mds2013/model/Crime.php');
	
	class CrimeTeste extends PHPUnit_Framework_Testcase{
		public function testeAtributoIdCrime(){
			$crime = new Crime();
			$this->assertInstanceOf('Crime',$crime);
			$this->assertObjectHasAttribute('idCrime', $crime);
			$crime->__setIdCrime(15);
			$this->assertEquals(15, $crime->__getIdCrime());
		}
		public function testExceptionSetIdCrime(){
			$crime = new Crime();
			$this->assertInstanceOf('Crime',$crime);
			$this->assertObjectHasAttribute('idCrime', $crime);
			$this->setExpectedException('ETipoErrado');
			$crime->__setIdCrime("erro");
		}
		public function testeAtributoQuantidade(){
			$crime = new Crime();
			$this->assertInstanceOf('Crime',$crime);
			$this->assertObjectHasAttribute('idCrime', $crime);
			$crime->__setQuantidade(15);
			$this->assertEquals(15, $crime->__getQuantidade());
		}
		public function testExceptionSetQuantidade(){
			$crime = new Crime();
			$this->assertInstanceOf('Crime',$crime);
			$this->assertObjectHasAttribute('idCrime', $crime);
			$this->setExpectedException('ETipoErrado');
			$crime->__setQuantidade("erro");
		}
		
		public function testeIdTempo(){
			$crime = new Crime();
			$this->assertInstanceOf('Crime',$crime);
			$this->assertObjectHasAttribute('idCrime', $crime);
			$crime->__setIdTempo(15);
			$this->assertEquals(15, $crime->__getIdTempo());
		}
		public function testExceptionSetIdTempo(){
			$crime = new Crime();
			$this->assertInstanceOf('Crime',$crime);
			$this->assertObjectHasAttribute('idCrime', $crime);
			$this->setExpectedException('ETipoErrado');
			$crime->__setIdTempo("erro");
		}
		public function testeIdNatureza(){
			$crime = new Crime();
			$this->assertInstanceOf('Crime',$crime);
			$this->assertObjectHasAttribute('idCrime', $crime);
			$crime->__setIdNatureza(15);
			$this->assertEquals(15, $crime->__getIdNatureza());
		}
		public function testExceptionSetIdNatureza(){
			$crime = new Crime();
			$this->assertInstanceOf('Crime',$crime);
			$this->assertObjectHasAttribute('idCrime', $crime);
			$this->setExpectedException('ETipoErrado');
			$crime->__setIdNatureza("erro");
		}
		public function testeConstructOverLoad(){
			$crime = new Crime();
			$this->assertInstanceOf('Crime',$crime);
			$this->assertObjectHasAttribute('idCrime', $crime);
			$crime->__constructOverload(1,2,3,4);
			$this->assertEquals(1, $crime->__getIdCrime());
			$this->assertEquals(2, $crime->__getIdTempo());
			$this->assertEquals(3, $crime->__getIdNatureza());
			$this->assertEquals(4, $crime->__getQuantidade());
		}
		public function testExceptionConstructOverLoad(){
			$crime = new Crime();
			$this->assertInstanceOf('Crime',$crime);
			$this->assertObjectHasAttribute('idCrime', $crime);
			$this->setExpectedException('ETipoErrado');
			$crime->__constructOverload("erro","erro","erro","erro");
		}
	}
?>
