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
	
		public function _testeSetNomeCategoria(){
			$categoria = new Categoria();
			$categoria->__setNomeCategoria("NomeCategoria");
			$this->assertEquals("NomeCategria", $categoria->__getNomeCategoria());
		}
	}
?>