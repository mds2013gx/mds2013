<?php
require_once('C:/xampp/htdocs/mds2013/controller/CrimeController.php');
require_once('C:/xampp/htdocs/mds2013/model/Crime.php');


class CrimeControllerTeste extends PHPUnit_Framework_Testcase{
	
	public function testConstruct()
	{
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
	}
	public function testListarTodas()
	{
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertNotEmpty($crimeController->_listarTodos());
	}
	public function testConsultarPorId()
	{
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertInstanceOf('Crime', $crimeController->_consultarPorId(1));
	}
	public function testConsultarPorIdNatureza()
	{
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertInstanceOf('Crime',$crimeController->_consultarPorIdNatureza(1));
	}
	public function testConsultarPorIdTempo()
	{
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertInstanceOf('Crime', $crimeController->_consultarPorIdTempo(1));
	}/*
	public function testInserirCrime()
	{
		$crimeController = new CrimeController();
		$crime = new Crime();
		$crime->__constructOverload(0,0,0,0);
		$this->assertNull($crimeController->_inserirCrime($crime));
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertInstanceOf('Crime', $crime);
	}*/
	public function testSomaDeCrimePorAno(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(125192,$crimeController->_somaDeCrimePorAno(2011));
	}
	public function testSomaDeCrimePorNatureza(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(6633,$crimeController->_somaDeCrimePorNatureza('Estupro'));
	}
	/*
	public function testInserirCrimeArrayParse()
	{
		$crimeController = new CrimeController();
		$crime = new Crime();
		$array['Estupro']['2001'] = 1;
		$resultado = $crimeController->_inserirCrimeArrayParse($array);
		$this->assertEquals('Estupro', $resultado->__getNatureza());
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertInstanceOf('Crime', $crime);
	}*/
	public function testRetornaDadosFormatados(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals($crimeController->_retornarDadosDeSomaFormatado(),'data : [107661,116628,135033,133676,129797,136812,129592,131684,131976,125272,125192]');
	}
	
}
