<?php
	require_once($_SERVER['DOCUMENT_ROOT'].'/mds2013/controller/CategoriaController.php');
	
	/**
	 * Classe CategoriaControllerTeste
	 **/
	class CategoriaControllerTeste extends PHPUnit_Framework_Testcase{
		
		public function testListarTodas()
		{
			$categoriaController = new CategoriaController();
			
		}
		
	}
?>