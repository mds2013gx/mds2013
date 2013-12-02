<?php
include_once('C:/xampp/htdocs/mds2013/persistence/RegiaoAdministrativaDAO.php');

class RegiaoAdministrativaController {
	private $RADAO;
	
	public function __construct(){
		$this->RADAO = new RegiaoAdministrativaDAO();
	}
}