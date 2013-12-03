<?php
include_once('C:/xampp/htdocs/mds2013/controller/NaturezaController.php');
include_once('./views/CategoriaView.php');
include_once('./views/CrimeView.php');
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
	public function _retornarDadosDeNaturezaFormatado(){
		return $this->naturezaCO->_retornarDadosDeNaturezaFormatado();
	}
	public function aposBarraLateral($idCategoria){
		
		$categoriaVW = new CategoriaView();
		$crimeVW = new CrimeView();
		$arrayCategorias = $categoriaVW->listarTodasAlfabeticamentePuro();
		$auxCategoria = $arrayCategorias[$idCategoria];
		$arrayNaturezas = $this->consultarPorIdCategoria($auxCategoria->__getIdCategoria());
		for($i=0;$i<count($arrayNaturezas);$i++){
				$naturezaAtual = $arrayNaturezas[$i];
				$auxBarra[] ="
				<div class=\"row-fluid\">
		
				<div class=\"box span12\">
							<div class=\"box-header\">
								<h2><a href=\"#\" class=\"btn-minimize\"><i class=\"icon-tasks\"></i>".$naturezaAtual->__getNatureza()."</a></h2>
								<div class=\"box-icon\">
									<a href=\"#\" class=\"btn-close\"><i class=\"icon-remove\"></i></a>
								</div>
							</div>
							<div class=\"box-content\" style=\"display: none;\">
								<h3>Por Ano</h3></br>
									<div class=\"main-chart-natureza\">
									
									 ".$this->_retornarDadosDeNaturezaFormatado()." </div>
								</br><h3>Por Regiao Administrativa</h3></br>
									
									".$this->listarTodasAlfabicamente()." 
		
							</div>
				</div>
		
				</div>";
		}
		return $auxBarra;
	}
}