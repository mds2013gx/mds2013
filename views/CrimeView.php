<?php
include_once('C:/xampp/htdocs/mds2013/controller/CrimeController.php');
class CrimeView{
	private $crimeCO;
	public function __construct(){
		$this->crimeCO = new CrimeController();
	}
	public function retornarDadosCrimeSomadoFormatado(){
		return $this->crimeCO->_retornarDadosDeSomaFormatado();
	}
}