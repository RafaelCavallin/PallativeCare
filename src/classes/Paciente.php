<?php

class Paciente
{
    private $id;
    private $nome;
    private $prontuario;
    private $dataNasc;
    private $contato;
    private $servico;
    private $dataCad;

    public function __construct()
    {
        
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getProntuario()
    {
        return $this->prontuario;
    }

    public function setProntuario($prontuario)
    {
        $this->prontuario = $prontuario;

        return $this;
    }

    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;

        return $this;
    }

    public function getContato()
    {
        return $this->contato;
    }

    public function setContato($contato)
    {
        $this->contato = $contato;

        return $this;
    }

    public function getServico()
    {
        return $this->servico;
    }

    public function setServico($servico)
    {
        $this->servico = $servico;

        return $this;
    }

    public function getDataCad()
    {
        return $this->dataCad;
    }

    public function setDataCad($dataCad)
    {
        $this->dataCad = $dataCad;

        return $this;
    }
}
