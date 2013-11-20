<?php 
require_once('C:/xampp/htdocs/mds2013/controller/NaturezaController.php');
require_once('C:/xampp/htdocs/mds2013/model/Natureza.php');

class NaturezaControllerTeste extends PHPUnit_Framework_Testcase{

	function testConstruct(){
		$naturezaController = new NaturezaController();
		$this->assertObjectHasAttribute('naturezaDAO', $naturezaController);
		$this->assertInstanceOf('NaturezaController', $naturezaController);
	}
	function testListarTodas(){
		$naturezaController = new NaturezaController();
		$this->assertObjectHasAttribute('naturezaDAO', $naturezaController);
		$this->assertInstanceOf('NaturezaController', $naturezaController);
		$this->assertNotEmpty($naturezaController->_listarTodas());
	}
	public function testListarTodasAlfabicamente()
	{
		$naturezaController = new NaturezaController();
		$this->assertObjectHasAttribute('naturezaDAO', $naturezaController);
		$this->assertInstanceOf('NaturezaController', $naturezaController);
		$this->assertNotEmpty($naturezaController->_listarTodasAlfabicamente());
	}
	public function testConsultarPorId()
	{
		$naturezaController = new NaturezaController();
		$this->assertObjectHasAttribute('naturezaDAO', $naturezaController);
		$this->assertInstanceOf('NaturezaController', $naturezaController);
		$this->assertInstanceOf('Natureza', $naturezaController->_consultarPorId(1));
	}
	public function testConsultarPorNome()
	{
		$naturezaController = new NaturezaController();
		$this->assertObjectHasAttribute('naturezaDAO', $naturezaController);
		$this->assertInstanceOf('NaturezaController', $naturezaController);
		$this->assertInstanceOf('Natureza', $naturezaController->_consultarPorNome('Roubo de Carga'));
	}
	public function testInserirNatureza()
	{
		$naturezaController = new NaturezaController();
		$natureza = new Natureza();
		$this->assertNull($naturezaController->_inserirNatureza($natureza));
		$this->assertObjectHasAttribute('naturezaDAO', $naturezaController);
		$this->assertInstanceOf('NaturezaController', $naturezaController);
		$this->assertInstanceOf('Natureza', $natureza);
	}
	public function testInserirNaturezaArrayParse()
	{
		$naturezaController = new NaturezaController();
		$natureza = new Natureza();
		$array['Criminalidade'] = 1;
		$resultado = $naturezaController->_inserirArrayParse($array); 
		$this->assertEquals('Criminalidade', $resultado->__getNomeCategoria());
		$this->assertObjectHasAttribute('naturezaDAO', $naturezaController);
		$this->assertInstanceOf('NaturezaController', $naturezaController);
		$this->assertInstanceOf('Natureza', $natureza);
	}
}