<?php
require_once('../libs/adodb/adodb.inc.php');

class Conexao{
	
	public $banco;
	private $tipo_banco;
	private $servidor;
	private $usuario;
	private $senha;
	private $db;
	protected function __construct(){
		$this->tipo_banco    = "mysql";
		$this->servidor      = "localhost";
		$this->usuario       = "root";
		$this->senha         = "";
		$this->db            = "radar_criminal";
		$this->banco = NewADOConnection($this->tipo_banco);
		$this->banco->dialect = 3;
		$this->banco->debug = false;
		$this->banco->Connect($this->servidor,$this->usuario,$this->senha,$db);
	}
}
