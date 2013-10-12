<?php
class Crime{
	private $idCrime;
	private $quantidade;
	private $idRegiaoAdministrativa;
	private $idTempo;
	private $idNatureza;
	
	public function __setIdCrime($idCrime){
		$this->idCrime = $idCrime;
	}
	public function __getIdCrime(){
		return $this->idCrime;
	}
	public function __setQuantidade($quantidade){
		$this->quantidade = $quantidade;
	}
	public function __getQuantidade(){
		return $this->quantidade;
	}
	public function __setIdRegiaoAdministrativa($idRegiaoAdministrativa){
		$this->idRegiaoAdministrativa = $idRegiaoAdministrativa;
	}
	public function __getIdRegiaoAdminsitartiva(){
		return $this->idRegiaoAdministrativa;
	}
	public function __setIdTempo($idTempo){
		$this->idTempo = $idTempo;
	}
	public function __getIdTempo(){
		return $this->idTempo;
	}
	public function __setIdNatureza($idNatureza){
		$this->idNatureza = $idNatureza;
	}
	public function __getIdNatureza(){
		return $this->idNatureza;
	}
}