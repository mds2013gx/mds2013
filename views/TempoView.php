<?php
include_once('./controller/TempoView.php');
class TempoView{
	private $tempoCO;
	public function __construct(){
		$this->tempoCO = new TempoController();
	}

	public function retornarDadosTempoFormatado(){
		return $this->tempoCO->_retornarDadosFormatados();
	}
}