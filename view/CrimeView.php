<?php
include_once(__APP_PATH.'/controller/CrimeController.php');
class CrimeView{
	private $crimeCO;
	public function __construct(){
		$this->crimeCO = new CrimeController();
	}
	public function retornarDadosCrimeSomadoFormatado(){
		return $this->crimeCO->_retornarDadosDeSomaFormatado();
	}
}