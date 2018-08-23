<?php
class PacienteGateway
{
    private static $instanceDb;
    private $tableDb;
    private $tableColumns;

    public function __construct()
    {
        $this->tableDb = 'pacientes';
        $this->tableColumns = array(
            "id" => \PDO::PARAM_INT,
            "nome" => \PDO::PARAM_STR,
            "dataNasc" => \PDO::PARAM_STR,
            "contato" => \PDO::PARAM_STR,
            "prontuario" => \PDO::PARAM_STR
        );
    }
}
