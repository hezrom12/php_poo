<?php

require_once 'Pessoa.php';
class Medico{

	private $person;

	public function __construct($person){
		$this->person = $person;
	}

	public function trocaSexo(){
		if ($this->person->getSexo() === 'M') {
			$this->person->setSexo('F');
		}else{
			$this->person->setSexo('M');
		}
		echo $this->person->getNome().' trocou de sexo para: '.$this->person->getSexo();
	}
}