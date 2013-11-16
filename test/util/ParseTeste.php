<?php
require_once "../../util/Parse.php";
class ParseTeste extends PHPUnit_Framework_Testcase{
	
	public function testConstructParseSerieHistorica(){
		$planilha = "série histórica - 2001 - 2012 2.xls";
		$this->assertFileExists('C:/xampp/htdocs/mds2013/files/'.$planilha);
		$parse = new Parse($planilha);
		$this->assertInstanceOf(new Parse($planilha) , $parse);
	}
	public function testSetNatureza(){
		
	}
	
	
}