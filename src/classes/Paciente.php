<?php

class Paciente
{
    private $data;

    public function __construct()
    {
        
    }

    public function __get($prop)
    {
        return $this->data[$prop];
    }

    public function __set($prop, $value)
    {
        $this->data[$prop] = $value;
    }

    public function __toString(){
        //  JSON_UNESCAPED_UNICODE
        // JSON_UNESCAPED_SLASHES
        return json_encode($this->data, JSON_UNESCAPED_UNICODE);
    }

    public function setInstanceDb(\PDO $instanceDb)
    {
        self::$instanceDb = $instanceDb;
    }

    public function lisById(int $id)
    {
        $gateway = new PacienteGateway;
        return $gateway->listById($id, ‘Paciente’);
    }
    
}
