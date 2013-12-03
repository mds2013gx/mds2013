<?php
	require_once('C:/xampp/htdocs/mds2013/controller/CategoriaController.php');
	require_once('C:/xampp/htdocs/mds2013/model/Categoria.php');
	
	/**
	 * Classe CategoriaControllerTeste
	 **/
	class CategoriaControllerTeste extends PHPUnit_Framework_Testcase{
		
		public function testConstruct()
		{
			$categoriaController = new CategoriaController();
			$this->assertObjectHasAttribute('categoriaDAO', $categoriaController);
			$this->assertInstanceOf('CategoriaController', $categoriaController);
				
		}
		public function testListarTodas()
		{
			$categoriaController = new CategoriaController();
			$this->assertObjectHasAttribute('categoriaDAO', $categoriaController);
			$this->assertInstanceOf('CategoriaController', $categoriaController);
			$this->assertNotEmpty($categoriaController->_listarTodas());
		}
		public function testListarTodasAlfabicamente()
		{
			$categoriaController = new CategoriaController();
			$this->assertObjectHasAttribute('categoriaDAO', $categoriaController);
			$this->assertInstanceOf('CategoriaController', $categoriaController);
			$this->assertNotEmpty($categoriaController->_listarTodasAlfabicamente());
		}
		public function testConsultarPorId()
		{
			$categoriaController = new CategoriaController();
			$this->assertObjectHasAttribute('categoriaDAO', $categoriaController);
			$this->assertInstanceOf('CategoriaController', $categoriaController);
			$this->assertInstanceOf('Categoria', $categoriaController->_consultarPorId(1));
		}
		public function testExceptionConsultarPorId(){
			$categoriaController = new CategoriaController();
			$this->assertObjectHasAttribute('categoriaDAO', $categoriaController);
			$this->assertInstanceOf('CategoriaController', $categoriaController);
			$this->setExpectedException('EErroConsulta');
			$categoriaController->_consultarPorId('teste');
		}
		public function testConsultarPorNome()
		{
			$categoriaController = new CategoriaController();
			$this->assertObjectHasAttribute('categoriaDAO', $categoriaController);
			$this->assertInstanceOf('CategoriaController', $categoriaController);
			$this->assertInstanceOf('Categoria', $categoriaController->_consultarPorNome('Criminalidade'));
		}
		public function testExceptionConsultarPorNome(){
			$categoriaController = new CategoriaController();
			$this->assertObjectHasAttribute('categoriaDAO', $categoriaController);
			$this->assertInstanceOf('CategoriaController', $categoriaController);
			$this->setExpectedException('EErroConsulta');
			$categoriaController->_consultarPorNome(1);
		}
		/*
		public function testInserirCategoria()
		{
			$categoriaController = new CategoriaController();
			$categoria = new Categoria();
			$categoria->__setNomeCategoria("teste");
			$this->assertInstanceOf('ADORecordSet_empty',$categoriaController->_inserirCategoria($categoria));
			$this->assertObjectHasAttribute('categoriaDAO', $categoriaController);
			$this->assertInstanceOf('CategoriaController', $categoriaController);
			$this->assertInstanceOf('Categoria', $categoria);
		}
		public function testInserirCategoriaArrayParse()
		{
			$categoriaController = new CategoriaController();
			$arrayCategoria[0] = "teste";	
			$this->assertNull($categoriaController->_inserirCategoriaArrayParse($arrayCategoria));
			$this->assertObjectHasAttribute('categoriaDAO', $categoriaController);
			$this->assertInstanceOf('CategoriaController', $categoriaController);
		}*/
	}
?>