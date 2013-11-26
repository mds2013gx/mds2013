<?php
	require_once('C:/xampp/htdocs/mds2013/persistence/CategoriaDAO.php');
	include_once('C:/xampp/htdocs/mds2013/persistence/Conexao.php');
	
	/**
	 * Classe CategoriaDAOTeste
	 **/
	class CategoriaDAOTeste extends PHPUnit_Framework_TestCase{
		
		
		public function testConstruct(){
			$categoriaDAO = new CategoriaDAO();
			$this->assertObjectHasAttribute('conexao', $categoriaDAO);
			$this->assertInstanceOf('CategoriaDAO', $categoriaDAO);
		}
		public function testListarTodas()
		{
			$categoriaDAO = new CategoriaDAO();
			$this->assertObjectHasAttribute('conexao', $categoriaDAO);
			$this->assertInstanceOf('CategoriaDAO', $categoriaDAO);
			$this->assertNotEmpty($categoriaDAO->listarTodas());
			$this->assertNotNull($categoriaDAO->listarTodas());
		}
		
		public function testListarTodasAlfabeticamente()
		{
			$categoriaDAO = new CategoriaDAO();
			$this->assertObjectHasAttribute('conexao', $categoriaDAO);
			$this->assertInstanceOf('CategoriaDAO', $categoriaDAO);
			$this->assertNotEmpty($categoriaDAO->listarTodasAlfabicamente());
			$this->assertNotNull($categoriaDAO->listarTodasAlfabicamente());
		}
	
		public function testConsultarPorId(){
			$categoriaDAO = new CategoriaDAO();
			$this->assertObjectHasAttribute('conexao', $categoriaDAO);
			$this->assertInstanceOf('CategoriaDAO', $categoriaDAO);
			$this->assertInstanceOf('Categoria', $categoriaDAO->consultarPorId(1));
			$this->assertObjectHasAttribute('idCategoria',$categoriaDAO->consultarPorId(1));
		}
		public function testConsultarPorNome(){
			$categoriaDAO = new CategoriaDAO();
			$this->assertObjectHasAttribute('conexao', $categoriaDAO);
			$this->assertInstanceOf('CategoriaDAO', $categoriaDAO);
			$this->assertInstanceOf('Categoria', $categoriaDAO->consultarPorNome('Criminalidade'));
			$this->assertObjectHasAttribute('idCategoria',$categoriaDAO->consultarPorNome('Criminalidade'));
		}
		public function testeInserirCategoria(){
			$categoriaDAO = new CategoriaDAO();
			$this->assertObjectHasAttribute('conexao', $categoriaDAO);
			$this->assertInstanceOf('CategoriaDAO', $categoriaDAO);
		}
	}
