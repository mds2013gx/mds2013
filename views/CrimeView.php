<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/mds2013/controller/CrimeController.php');
class CrimeView{
	private $crimeCO;
	public function __construct(){
		$this->crimeCO = new CrimeController();
	}
	public function retornarDadosCrimeSomadoFormatado(){
		return $this->crimeCO->_retornarDadosDeSomaFormatado();
	}
}