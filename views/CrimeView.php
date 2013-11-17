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
//Metodo duplicado para adaptacao do retorno de dados para a nova interface
/**
 * @author Eduardo Augusto
 * @author Sergio Silva
 * @author Eliseu Egewarth
 * @copyright RadarCriminal 2013
 **/
	public function retornarDadosCrimeSomadoFormatoNovo(){
		return $this->crimeCO->_retornarDadosDeSomaFormatoNovo();
	}
}