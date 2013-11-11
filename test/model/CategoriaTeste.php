<?php
	require_once ($_SERVER['DOCUMENT_ROOT'].'/mds2013/model/Categoria.php'');
	
	/**
	 * Classe Categoria Teste
	 **/
	class CategoriaTeste extends PHPUnit_Framework_Testcase{
		public function testeSetIdCategoria(){
			$categoria = new Categoria();
			$categoria->__setIdCategoria(10);
			$this->assertEquals(10, $categoria->__getIdCategoria());
		}
		
		public function testeSetNomeCategoria(){
			$categoria = new Categoria();
			$categoria->__setNomeCategoria("NomeCategoria");
			$this->assertEquals("NomeCategoria", $categoria->__getNomeCategoria());
		}
		public function testeConstructOverLoad(){
			$categoria = new Categoria();
			$categoria->__constructOverload(2,"nomeCategoria");
			$this->assertEquals(2,$categoria->__getIdCategoria());
			$this->assertEquals("nomeCategoria",$categoria->__getNomeCategoria());
			
		}
	}

?>