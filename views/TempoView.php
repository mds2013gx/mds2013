<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/mds2013/controller/TempoController.php');
class TempoView{
	private $tempoCO;
	public function __construct(){
		$this->tempoCO = new TempoController();
	}

	public function retornarDadosTempoFormatado(){
		return $this->tempoCO->_retornarDadosFormatados();
	}
}