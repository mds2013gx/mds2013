<?php
include_once(__APP_PATH.'/controller/TempoController.php');
class TempoView{
	private $tempoCO;
	public function __construct(){
		$this->tempoCO = new TempoController();
	}

	public function retornarDadosTempoFormatado(){
		return $this->tempoCO->_retornarDadosFormatados();
	}
}