<?php
	require_once ('C:/xampp/htdocs/mds2013/model/Categoria.php');
	
	/**
	 * Classe Categoria Teste
	 **/
	class CategoriaTeste extends PHPUnit_Framework_Testcase{
			
		public function testSetIdCategoria(){
			$categoria = new Categoria();
			$this->assertInstanceOf('Categoria',$categoria);
			$this->assertObjectHasAttribute('idCategoria', $categoria);
			$categoria->__setIdCategoria(10);
			$this->assertEquals(10, $categoria->__getIdCategoria());
		}
		public function testExceptionSetIdCategoria(){
			$categoria = new Categoria();
			$this->assertInstanceOf('Categoria',$categoria);
			$this->assertObjectHasAttribute('idCategoria', $categoria);
			$this->setExpectedException('ETipoErrado');
			$categoria->__setIdCategoria('errado');
		}
		public function testSetNomeCategoria(){
			$categoria = new Categoria();
			$this->assertInstanceOf('Categoria',$categoria);
			$this->assertObjectHasAttribute('idCategoria', $categoria);
			$categoria->__setNomeCategoria("NomeCategoria");
			$this->assertEquals("NomeCategoria", $categoria->__getNomeCategoria());
		}
		public function testExceptionSetNomeCategoria(){
			$categoria = new Categoria();
			$this->assertInstanceOf('Categoria',$categoria);
			$this->assertObjectHasAttribute('idCategoria', $categoria);
			$this->setExpectedException('ETipoErrado');
			$categoria->__setNomeCategoria(13);
		}
		
		public function testConstructOverLoad(){
			$categoria = new Categoria();
			$this->assertInstanceOf('Categoria',$categoria);
			$this->assertObjectHasAttribute('idCategoria', $categoria);
			$categoria->__constructOverload(2,"nomeCategoria");
			$this->assertEquals(2,$categoria->__getIdCategoria());
			$this->assertEquals("nomeCategoria",$categoria->__getNomeCategoria());
			$this->assertInstanceOf('Categoria', $categoria);
		}
		public function testExceptionConstructOverLoad(){
			$categoria = new Categoria();
			$this->assertInstanceOf('Categoria',$categoria);
			$this->assertObjectHasAttribute('idCategoria', $categoria);
			$this->setExpectedException('ETipoErrado');
			$categoria->__constructOverload("erro",1);
		}
	}

?>