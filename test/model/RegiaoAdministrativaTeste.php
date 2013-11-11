<?php
	require_once "../../model/RegiaoAdministrativa.php";
	
	/**
	 * Classe RegiaoAdministrativa Teste
	 **/
	class RegiaoAdministrativaTeste extends PHPUnit_Framework_Testcase{
		private $regiao_administrativa;
		
		public function testSetIdRegiaoAdministrivaExpectedValue(){
			$regiao_administrativa = new RegiaoAdministrativa();
			$regiao_administrativa->__setIDRegiaoAdministrativa(42);
			$this->assertEquals(42, $regiao_administrativa->__getIdRegiaoAdministrativa());
		}
		
		public function testSetIdRegiaoAdministrativaFloatValue(){
			$regiao_administrativa = new RegiaoAdministrativa();
			$regiao_administrativa->__setIDRegiaoAdministrativa(40.5);
			$this->assertNull($regiao_administrativa->__getIdRegiaoAdministrativa());
		}
		
		public function testSetIdRegiaoAdministrativaStringValue(){
			$regiao_administrativa = new RegiaoAdministrativa();
			$regiao_administrativa->__setIDRegiaoAdministrativa("id");
			$this->assertNull($regiao_administrativa->__getIdRegiaoAdministrativa());
		}
		
		public function testSetIdRegiaoAdministrativaNullValue(){
			$regiao_administrativa = new RegiaoAdministrativa();
			$regiao_administrativa->__setIDRegiaoAdministrativa(NULL);
			$this->assertNull($regiao_administrativa->__getIdRegiaoAdministrativa());
		}
	
		public function testSetNomeRegiaoAdminstrativaExpectedValue(){
			$regiao_administrativa = new RegiaoAdministrativa();
			$regiao_administrativa->__setNomeRegiao("Regiao Administrativa");
			$this->assertEquals("Regiao Administrativa", $regiao_administrativa->__getNomeRegiao());
		}
		
		public function testSetNomeRegiaoAdministrativaIntegerValue(){
			$regiao_administrativa = new RegiaoAdministrativa();
			$regiao_administrativa->__setNomeRegiao(108);
			$this->assertNull($regiao_administrativa->__getNomeRegiao());
		}
		
		public function testSetNomeRegiaoAdministrativaFloatValue(){
			$regiao_administrativa = new RegiaoAdministrativa();
			$regiao_administrativa->__setNomeRegiao(18.95);
			$this->assertNull($regiao_administrativa->__getNomeRegiao());
		}
		
		public function testSetNomeRegiaoAdministrativaNullValue(){
			$regiao_administrativa = new RegiaoAdministrativa();
			$regiao_administrativa->__setNomeRegiao(NULL);
			$this->assertNull($regiao_administrativa->__getNomeRegiao());
		}
	}
?>