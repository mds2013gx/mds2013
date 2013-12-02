<?php
include_once('C:/xampp/htdocs/mds2013/controller/RegiaoAdministrativaController.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EErroConsulta.php');

class RegiaoAdministrativaView{
	private $RACO;

	public function __construct(){
		$this->RACO = new RegiaoAdministrativaController();
	}
	public function listarTodasAlfabeticamente(){
		$nomeRA = $this->RACO->_listarTodasAlfabeticamente();
		for($i=0;$i<count($nomeRA);$i++){
			echo '<li><a class="submenu" href="table.php">&nbsp;<i class="icon-map-marker"></i><span class="hidden-tablet">'.$nomeRA[$i].'</span></a></li>';
		}
	}
	
	public function contarRegistrosRA(){
		return $this->RACO->_contarRegistrosRA();
	}
}