<?php
	require_once "../../model/RegiaoAdministrativa.php";
	
	/**
	 * Classe RegiaoAdministrativa Teste
	 **/
	class RegiaoAdministrativaTeste extends PHPUnit_Framework_Testcase{
		public function testSet_GetIdRegiaoAdministriva(){
			$regiao_administrativa = new RegiaoAdministrativa();
			$regiao_administrativa->__setIDRegiaoAdministrativa(42);
			$this->assertEquals(42, $regiao_administrativa->__getIdRegiaoAdministrativa());
		}
	
		public function testSet_GetNomeRegiaoAdminstrativa(){
			$regiao_administrativa = new RegiaoAdministrativa();
			$regiao_administrativa->__setNomeRegiao("Regiao Administrativa");
			$this->assertEquals("Regiao Administrativa", $regiao_administrativa->__getNomeRegiao());
		}
	}
?>