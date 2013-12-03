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
	public function testSomaCrimeTodosAnos(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(1403323,$crimeController->_somaCrimeTodosAnos());
	}
	public function testRetornarDadosDeSomaFormatoNovo(){
		$scriptTeste = "
<div class=\"bar\"title=\"107.661 Ocorrencias\">
<div class=\"title\">2001</div>
<div class=\"value\">107661</div>
</div>
<div class=\"bar simple\"title=\"116.628 Ocorrencias\">
<div class=\"title\">2002</div>
<div class=\"value\">116628</div>
</div>
<div class=\"bar\"title=\"135.033 Ocorrencias\">
<div class=\"title\">2003</div>
<div class=\"value\">135033</div>
</div>
<div class=\"bar simple\"title=\"133.676 Ocorrencias\">
<div class=\"title\">2004</div>
<div class=\"value\">133676</div>
</div>
<div class=\"bar\"title=\"129.797 Ocorrencias\">
<div class=\"title\">2005</div>
<div class=\"value\">129797</div>
</div>
<div class=\"bar simple\"title=\"136.812 Ocorrencias\">
<div class=\"title\">2006</div>
<div class=\"value\">136812</div>
</div>
<div class=\"bar\"title=\"129.592 Ocorrencias\">
<div class=\"title\">2007</div>
<div class=\"value\">129592</div>
</div>
<div class=\"bar simple\"title=\"131.684 Ocorrencias\">
<div class=\"title\">2008</div>
<div class=\"value\">131684</div>
</div>
<div class=\"bar\"title=\"131.976 Ocorrencias\">
<div class=\"title\">2009</div>
<div class=\"value\">131976</div>
</div>
<div class=\"bar simple\"title=\"125.272 Ocorrencias\">
<div class=\"title\">2010</div>
<div class=\"value\">125272</div>
</div>
<div class=\"bar\"title=\"125.192 Ocorrencias\">
<div class=\"title\">2011</div>
<div class=\"value\">125192</div>
</div>";
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals($scriptTeste,$crimeController->_retornarDadosDeSomaFormatoNovo());
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
	public function testSomaHomicidios2010_2011(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(13122,$crimeController->_somaHomicidios2010_2011());
	}
	public function testSomaCrime2010_2011(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(250464,$crimeController->_somaCrime2010_2011());
	}
	public function testSomaTotalHomicidios(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(72171,$crimeController->_somaTotalHomicidios());
	}
	public function testSomaGeralCrimeContraPessoa(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(216513,$crimeController->_somaGeralCrimeContraPessoa());
	}
	public function testSomaGeralCrimeContraPessoa2010_2011(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(39366,$crimeController->_somaGeralCrimeContraPessoa2010_2011());
	}
	public function testSomaTotalRoubo(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(938223,$crimeController->_somaTotalRoubo());
	}
	public function testSomaTotalRoubo2010_2011(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(1876446,$crimeController->_somaTotalRoubo2010_2011());
	}
	public function testSomaTotalFurtos(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(1475370,$crimeController->_somaTotalFurtos());
	}
	public function testSomaLesaoCorporal(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(1450746,$crimeController->_somaLesaoCorporal());
	}
	public function testSomaLesaoCorporal2010_2011(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(2901492,$crimeController->_somaLesaoCorporal2010_2011());
	}
	public function testSomaTotalTentativasHomicidios2010_2011(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(20400,$crimeController->_somaTotalTentativasHomicidio2010_2011());
	}
	public function testSomarGeral(){
		$crimeController = new CrimeController();
		$this->assertObjectHasAttribute('crimeDAO', $crimeController);
		$this->assertInstanceOf('CrimeController', $crimeController);
		$this->assertEquals(25575667,$crimeController->_somarGeral());
	}
}
