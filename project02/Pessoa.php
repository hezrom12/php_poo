<?php

class Pessoa{
	
	private $nome, $idade, $sexo;

	public function __construct($no,$id,$se){
		$this->nome = $no;
		$this->idade = $id;
		$this->sexo = $se;
	}

	//Construtor sem parâmetros
	/*public function __construct(){
		$this->nome = 'Pessoa';
		$this->idade = 18;
		$this->sexo = 'M';
	}*/

	public function getNome(){
		return $this->nome;
	}
	public function getIdade(){
		return $this->idade;
	}
	public function getSexo(){
		return $this->sexo;
	}
	public function setNome($no){
		$this->nome = $no;
	}
	public function setIdade($id){
		$this->idade = $id;
	}
	public function setSexo($se){
		$this->sexo = $se;
	}

	public function fazAniver(){
		$this->idade ++;
	}

}