<?php
	require_once "../../model/Categoria.php";
	
	/**
	 * Classe Categoria Teste
	 **/
	class CategoriaTeste extends PHPUnit_Framework_Testcase{
		public function __testeSetIdCategoria(){
			$categoria = new Categoria();
			$categoria->__setIdCategoria(10);
			$this->assertEquals(10, $categoria->__getIdCategoria());
		}
		
		public function _testeSetNomeCategoria(){
			$categoria = new Categoria();
			$categoria->__setNomeCategoria("NomeCategoria");
			$this->assertEquals("NomeCategria", $categoria->__getNomeCategoria());
		}
	}

?>