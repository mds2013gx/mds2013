<?php
include_once('C:/xampp/htdocs/mds2013/persistence/RegiaoAdministrativaDAO.php');

class RegiaoAdministrativaController {
	private $RADAO;
	
	public function __construct(){
		$this->RADAO = new RegiaoAdministrativaDAO();
	}
	public function _listarTodas(){
		return $this->RADAO->listarTodas();
	}
	public function _listarTodasAlfabeticamente(){
		return $this->RADAO->listarTodasAlfabeticamente();
	}
	public function _consultarPorId($id){
		return $this->RADAO->consultarPorId($id);
	}
	public function _consultarPorNome($nome){
		return $this->RADAO->consultarPorNome($nome);
	}
	public function _inserirRA(RegiaoAdministrativa $RA){
		return $this->RADAO->inserirRA($RA);
	}
}