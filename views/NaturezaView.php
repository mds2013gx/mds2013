<?php
include_once('C:/xampp/htdocs/mds2013/controller/NaturezaController.php');
class NaturezaView{
	private $naturezaCO;
	public function __construct(){
		$this->naturezaCO = new NaturezaController();
	}
	
	public function listarTodasAlfabicamente(){
		$todasNaturezas= $this->naturezaCO->_listarTodasAlfabicamente();
		for($i=0,$retornoTipos = "";$i<count($todasNaturezas);$i++){
			$retornoTipos=$retornoTipos."<h3>".$todasNaturezas[$i]->__getNatureza()."</h3>
		<div class=\"progress\" title=\"70%\">
		<div class=\"bar\" style=\"width: 70%;\"></div>
		</div>";
		}
		
		return $retornoTipos;
	}
	public function consultarPorNome($natureza){
		$natureza = $this->naturezaCO->_consultarPorNome($natureza);
		return $natureza->__getNatureza();
	}
	public function consultarPorId($id){
		$natureza = $this->naturezaCO->_consultarPorId($id);
		return $natureza->__getNatureza();
	}
	public function consultarPorIdCategoria($id){
		return $this->naturezaCO->_consultarPorIdCategoria($id);
	}
}