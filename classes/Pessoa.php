<?php
class Pessoa 
{
    private $idPessoa;
    private $nome;
    private $dataNasc;

    public function __construct(){

    }

    public function getId(){
        return $this->idPessoa;
    }

    public function setId($id){
        $this->idPessoa = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }


}