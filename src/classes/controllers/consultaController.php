<?php
session_start();
include_once ("../Conexao.php");
include_once ("../DbAdmin.php");

$acao = $_GET['acao'];

switch ($acao) {
	case 'cadConsulta':
		var_dump($_POST); 

		break;
	
	default:
		# code...
		break;
}