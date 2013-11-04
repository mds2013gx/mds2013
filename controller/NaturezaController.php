<?php
include_once(__APP_PATH.'/persistence/NaturezaDAO.php');
include_once(__APP_PATH.'/persistence/CategoriaDAO.php');
include_once(__APP_PATH.'/model/Natureza.php');
include_once(__APP_PATH.'/model/Categoria.php');
class NaturezaController{
	private $naturezaDAO;
	
	public function __construct(){
		$this->naturezaDAO = new NaturezaDAO();
	}
	public function _listarTodas(){
		return $this->naturezaDAO->listarTodas();
	}
	public function _listarTodasAlfabicamente(){
		return $this->naturezaDAO->listarTodasAlfabicamente();
	}
	public function _consultarPorId($id){
		return $this->naturezaDAO->consultarPorId($id);
	}
	public function _consultarPorNome($natureza){
		return $this->naturezaDAO->consultarPorNome($natureza);
	}
	public function _inserirNatureza(Natureza $natureza){
		return $this->naturezaDAO->inserirNatureza($natureza);
	}
	public function _inserirArrayParse($arrayNatureza){
		for($i=0,$arrayKey = $arrayNatureza,$inicio = 0;$i<count($arrayNatureza);$i++){
			$chave = key($arrayKey);
			$categoriaDAO = new CategoriaDAO();
			$dadosCategoria = new Categoria();
			$dadosCategoria = $categoriaDAO->consultarPorNome($chave);
			for($j=$inicio;$j<(count($arrayNatureza[$chave])+$inicio);$j++){
				$dadosNatureza = new Natureza();
				$dadosNatureza->__setNatureza($arrayNatureza[$chave][$j]);
				$dadosNatureza->__setIdCategoria($dadosCategoria->__getIdCategoria());
				$this->naturezaDAO->inserirNatureza($dadosNatureza);
			}
			$inicio = $inicio+count($arrayNatureza[$chave]);
			next($arrayKey);
		}
	}
}