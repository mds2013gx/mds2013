<?php
	require_once ('C:/xampp/htdocs/mds2013/model/RegiaoAdministrativa.php');
	
	/**
	 * Classe RegiaoAdministrativa Teste
	 **/
	class RegiaoAdministrativaTeste extends PHPUnit_Framework_Testcase{
		
		private $regiaoAdministrativa;
		
		public function setUp(){
			$this->regiaoAdministrativa = new RegiaoAdministrativa();
		}
		
		public function testeSetIdRegiaoAdministriva(){
			$this->regiaoAdministrativa->__setIdRegiaoAdministrativa(42);
			$this->assertEquals(42, $this->regiaoAdministrativa ->__getIdRegiaoAdministrativa());
		}
		public function testSetNomeRegiaoAdminstrativa(){
			$this->regiaoAdministrativa ->__setNomeRegiao("Regiao Administrativa");
			$this->assertEquals("Regiao Administrativa", $this->regiaoAdministrativa ->__getNomeRegiao());
		}
	}
?>