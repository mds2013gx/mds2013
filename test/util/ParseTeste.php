<?php
require_once "../../util/Parse.php";
class ParseTeste extends PHPUnit_Framework_Testcase{
	
	public function testExistenciaInstanciaParseSerieHistorica(){
		$planilha = "série histórica - 2001 - 2012 2.xls";
		$this->assertFileExists('C:/xampp/htdocs/mds2013/files/'.$planilha);
		$parse = new Parse($planilha);
		$this->assertInstanceOf(new Parse($planilha) , $parse);
	}
	public function testExistenciaInstanciaParseQuadrimestre(){
		$planilha = "Quadrimestre_final.2013.xls";	
		$this->assertFileExists('C:/xampp/htdocs/mds2013/files/'.$planilha);
		$parse = new Parse($planilha);
		$this->assertInstanceOf(new Parse($planilha), $parse);
	}
	public function testeSetNatureza(){
		$planilha = "Quadrimestre_final.2013.xls";
		$parse = new Parse($planilha);
		$parse->__setNatureza("Natureza");
		$this->assertEquals("Natureza", $parse->__getNatureza());
	}
	public function testeSetCategoria(){
		$planilha = "Quadrimestre_final.2013.xls";
		$parse = new Parse($planilha);
		$parse->__setCategoria("Categoria");
		$this->assertEquals("Categoria", $parse->__getCategoria());
	}
	public function testeSetTempo(){
		$planilha = "Quadrimestre_final.2013.xls";
		$parse = new Parse($planilha);
		$parse->__setTempo(2013);
		$this->assertEquals(2013, $parse->__getTempo());
	}
	public function testeSetCrime(){
		$planilha = "Quadrimestre_final.2013.xls";
		$parse = new Parse($planilha);
		$parse->__setCrime(200);
		$this->assertEquals(200 , $parse->__getCrime());
	}
}