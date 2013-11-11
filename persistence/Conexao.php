<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/mds2013/libs/adodb/adodb.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/mds2013/exceptions/EConexaoFalha.php');
class Conexao{
	
	public $banco;
	private $tipo_banco;
	private $servidor;
	private $usuario;
	private $senha;
	private $db;
	public function __construct(){
		
		$this->tipo_banco    = "mysql";
		$this->servidor      = "localhost";
		$this->usuario       = "root";
		$this->senha         = "";
		$this->db            = "radar_criminal";
		$this->banco = NewADOConnection($this->tipo_banco);
		$this->banco->dialect = 3;
		$this->banco->debug = false;
		try{
			if(!$this->banco->Connect($this->servidor,$this->usuario,$this->senha,$this->db)){
				throw new EConexaoFalha();	
			}
		}catch(EConexaoFalha $e){
			echo $e->getMessage();
		}
	}
}
