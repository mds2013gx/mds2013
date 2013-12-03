<?php
require_once('C:/xampp/htdocs/mds2013/controller/RegiaoAdministrativaController.php');
require_once('C:/xampp/htdocs/mds2013/model/RegiaoAdministrativa.php');

class RegiaoAdministrativaControllerTeste extends PHPUnit_Framework_Testcase{
	public function testConstruct()
	{
		$RAController = new RegiaoAdministrativaController();
		$this->assertObjectHasAttribute('RADAO', $RAController);
		$this->assertInstanceOf('RegiaoAdministrativaController', $RAController);
	}
	
	public function testListarTodas()
	{
		$RAController = new RegiaoAdministrativaController();
		$this->assertObjectHasAttribute('RADAO', $RAController);
		$this->assertInstanceOf('RegiaoAdministrativaController', $RAController);
		$this->assertNotEmpty($RAController->_listarTodas());
	}
	public function testListarTodasAlfabeticamente()
	{
		$RAController = new RegiaoAdministrativaController();
		$this->assertObjectHasAttribute('RADAO', $RAController);
		$this->assertInstanceOf('RegiaoAdministrativaController', $RAController);
		$this->assertNotEmpty($RAController->_listarTodasAlfabeticamente());
	}
	public function testConsultarPorId()
	{
		$RAController = new RegiaoAdministrativaController();
		$this->assertObjectHasAttribute('RADAO', $RAController);
		$this->assertInstanceOf('RegiaoAdministrativaController', $RAController);
		$this->assertInstanceOf('RegiaoAdministrativa', $RAController->_consultarPorId(1));
	}
	public function testConsultarPorNome()
	{
		$RAController = new RegiaoAdministrativaController();
		$this->assertObjectHasAttribute('RADAO', $RAController);
		$this->assertInstanceOf('RegiaoAdministrativaController', $RAController);
		$this->assertInstanceOf('RegiaoAdministrativa', $RAController->_consultarPorNome('BRASÍLIA'));
	}
	public function testContarRegistrosRA()
	{
		$RAController = new RegiaoAdministrativaController();
		$this->assertObjectHasAttribute('RADAO', $RAController);
		$this->assertInstanceOf('RegiaoAdministrativaController', $RAController);
		$this->assertEquals(31, $RAController->_contarRegistrosRA());
	}
}