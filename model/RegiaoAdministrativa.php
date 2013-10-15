<?php
class RegiaoAdministrativa{
	private $idRegiaoAdministrativa;
	private $nomeRegiao;
	
	public function __setIdRegiaoAdministrativa($idRegiaoAdministrativa){
		$this->idRegiaoAdministrativa = $idRegiaoAdministrativa;
	}
	public function __getIdRegiaoAdministrativa(){
		return $this->idRegiaoAdministrativa;
	}
	public function __setNomeRegiao($nomeRegiao){
		$this->nomeRegiao = $nomeRegiao;
	}
	public function __getNomeRegiao(){
		return $this->nomeRegiao;
	}
}