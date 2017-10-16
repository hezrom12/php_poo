<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa{
	private $matricula;

	public function msg(){
		echo "Eu sou um aluno!</br>";
	}

	public function getMatricula(){
		return $this->matricula;
	}
	
	public function setMatricula($mat){
		$this->matricula=$mat;
	}
}