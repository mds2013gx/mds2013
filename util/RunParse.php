<?php
require_once (__APP_PATH.'/util/Parse.php');
include_once (__APP_PATH.'/controller/CategoriaController.php');
include_once (__APP_PATH.'/controller/CrimeController.php');
include_once (__APP_PATH.'/controller/NaturezaController.php');
include_once (__APP_PATH.'/controller/TempoController.php');
class RunParse{
	private $parse;
	private $categoriaCO;
	private $crimeCO;
	private $naturezaCO;
	private $tempoCO;
	public function __construct(){
		$this->categoriaCO = new CategoriaController();
		$this->crimeCO = new CrimeController();
		$this->naturezaCO = new NaturezaController();
		$this->tempoCO = new TempoController();
		$this->parse = new Parse("série histórica - 2001 - 2012 2.xls");
		$this->categoriaCO->_inserirCategoriaArrayParse($this->parse->__getCategoria());
		$this->tempoCO->_inserirTempoArrayParse($this->parse->__getTempo());
		$this->naturezaCO->_inserirArrayParse($this->parse->__getNatureza());
		$this->crimeCO->_inserirCrimeArrayParse($this->parse->__getCrime());
	}
}
