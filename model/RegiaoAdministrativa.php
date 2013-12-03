<?php
include_once('C:/xampp/htdocs/mds2013/exceptions/ETipoErrado.php');

class RegiaoAdministrativa{
	private $idRegiaoAdministrativa;
	private $nomeRegiao;
	
	public function __construct(){
	
	}
	public function __constructOverLoad($idRA,$nomeRegiao){
		try{
			if(!is_numeric($idRA) || !is_string($nomeRegiao)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->idRegiaoAdministrativa = $idRA;
		$this->nomeRegiao = $nomeRegiao;
	}
	public function __setIdRegiaoAdministrativa($idRegiaoAdministrativa){
		try{
			if(!is_numeric($idRegiaoAdministrativa)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->idRegiaoAdministrativa = $idRegiaoAdministrativa;
	}
	public function __getIdRegiaoAdministrativa(){
		try{
			if(!is_int($this->idRegiaoAdministrativa)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		return $this->idRegiaoAdministrativa;
	}
	public function __setNomeRegiao($nomeRegiao){
		try{
			if(!is_string($nomeRegiao)){
				throw new ETipoErrado();
			}
		}
		catch(ETipoErrado $e){
			echo $e->getMessage();
		}
		$this->nomeRegiao = $nomeRegiao;
	}
	public function __getNomeRegiao(){
		//try{
		//	if(!is_string($this->nomeRegiao)){
		//		throw new ETipoErrado();
		//	}
		//}
		//catch(ETipoErrado $e){
		//	echo $e->getMessage();
		//}
		return $this->nomeRegiao;
	}
}