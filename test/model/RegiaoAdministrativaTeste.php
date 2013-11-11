<?php
	require_once ('C:/xampp/htdocs/mds2013/model/RegiaoAdministrativa.php');
	
	/**
	 * Classe RegiaoAdministrativa Teste
	 **/
	class RegiaoAdministrativaTeste extends PHPUnit_Framework_Testcase{
		private $regiaoAdministrativa;
		
		public function testeSetIdRegiaoAdministriva(){
			$regiaoAdministrativa = new RegiaoAdministrativa();
			$regiaoAdministrativa->__setIdRegiaoAdministrativa(42);
			$this->assertEquals(42, $regiaoAdministrativa->__getIdRegiaoAdministrativa());
		}
		public function testSetNomeRegiaoAdminstrativa(){
			$regiaoAdministrativa = new RegiaoAdministrativa();
			$regiaoAdministrativa->__setNomeRegiao("Regiao Administrativa");
			$this->assertEquals("Regiao Administrativa", $regiaoAdministrativa->__getNomeRegiao());
		}
	}
?>