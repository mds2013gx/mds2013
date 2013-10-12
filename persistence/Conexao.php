<?php
require('../libs/adodb/adodb.inc.php');

class Conexao{
	
	protected $banco;
	
	protected function __construct(){
		$tipo_banco    = "mysql";
		$servidor      = "";
		$usuario       = "";
		$senha         = "";
		$db            = "";
		$this->banco = NewADOConnection($tipo_banco);
		$this->banco->dialect = 3;
		$this->banco->debug = false;
		$this->banco->Connect($servidor,$usuario,$senha,$db);
		return $this->banco;
	}
}
