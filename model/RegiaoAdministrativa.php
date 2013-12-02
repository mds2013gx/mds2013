<?php
include_once('C:/xampp/htdocs/mds2013/exceptions/ETipoErrado.php');

class RegiaoAdministrativa{
	private $idRegiaoAdministrativa;
	private $nomeRegiao;
	
	public function __construct(){
	
	}
	public function __constructOverLoad($idRA,$nomeRegiao){
		
		if(!is_numeric($idRA) || !is_string($nomeRegiao)){
			throw new ETipoErrado();
		}
		$this->idRegiaoAdministrativa = $idRA;
		$this->nomeRegiao = $nomeRegiao;
	}
	public function __setIdRegiaoAdministrativa($idRegiaoAdministrativa){
	
		if(!is_numeric($idRegiaoAdministrativa)){
			throw new ETipoErrado();
		}
		$this->idRegiaoAdministrativa = $idRegiaoAdministrativa;
	}
	public function __getIdRegiaoAdministrativa(){

		if(!is_int($this->idRegiaoAdministrativa)){
			throw new ETipoErrado();
		}
		return $this->idRegiaoAdministrativa;
	}
	public function __setNomeRegiao($nomeRegiao){
		
		if(!is_string($nomeRegiao)){
			throw new ETipoErrado();
		}
		$this->nomeRegiao = $nomeRegiao;
	}
	public function __getNomeRegiao(){
		
		if(!is_string($this->nomeRegiao)){
			throw new ETipoErrado();
		}
		return $this->nomeRegiao;
	}
}