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
		
	}
?>