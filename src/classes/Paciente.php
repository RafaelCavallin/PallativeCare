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

    public function listById(int $id)
    {
        $gateway = new PacienteGateway;
        return $gateway->listById($id, 'Paciente');
    }

    public static function retrieveById(int $id)
    {
        $gateway = new ClientesGateway;
        return $gateway->retrieveById($id, ‘Cliente’);
    }
   
    public static function retrieveAll(string $filter = ”)
    {
        $gateway = new ClientesGateway;
        return $gateway->retrieveAll($filter, ‘Cliente’);
    }

    public function delete()
    {
        $gateway = new ClientesGateway;
        return $gateway->delete($this->id);
    }

    public function persist()
    {
        $gateway = new ClientesGateway;
        return $gateway->persist((object) $this->data);
    }
    
}
