<?php

class CrimeException extends Exception{
	public function __construct($message=null, $code, $id){
		echo this->message;
		parent::__construct($message, $code);
	}
	
}
