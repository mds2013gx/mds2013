<?php
require_once('C:/xampp/htdocs/mds2013/persistence/Conexao.php');

/**
 * Classe de teste da classe Conexao
 * @author Lucas Andrade Ribeiro
 * @copyright RadarCriminal 2013
 */
class ConexaoTeste extends PHPUnit_Framework_TestCase{

	public function testConstruct(){
	//	$conexao = new Conexao();
	//	$this->assertObjectHasAttribute('banco', $conexao);
	//	$this->assertInstanceOf('Conexao', $conexao);
	}
	public function testConstructExcessao(){
		$conexao = new Conexao("localhost","root","","teste");
		$this->setExpectedException('EConexaoFalha');
	} 
}