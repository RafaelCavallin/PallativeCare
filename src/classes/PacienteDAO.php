<?php 
require_once 'Conexao.php';
require_once 'DbAdmin.php';
require_once 'Paciente.php';

/**
 * Classe paciente DAO
 */
class PacienteDAO
{
	
	function __construct()
	{
		
	}

	public function populaPaciente($row)
	{
		$pct = new Paciente();

		$pct->setId($row['id_paciente']);
        $pct->setNome($row['nome_paciente']);
        $pct->setProntuario($row['prontuario']);
        $pct->setDataNasc($row['data_nasc']);
        $pct->setContato($row['contato']);
        $pct->setServico($row['servico']);
        
		return $pct;
	}
}