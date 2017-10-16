<?php
require_once 'Pessoa.php';

class Professor extends Pessoa{
	private $materia;

	public function msg(){
		echo "Eu sou um Professor(a)!</br>";
	}

	public function getMateria(){
		return $this->materia;
	}
	
	public function setMateria($mat){
		$this->materia=$mat;
	}
}