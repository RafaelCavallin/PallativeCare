<?php 
include_once ("../Conexao.php");

$acao = $_GET['acao'];

switch ($acao) {

	case 'logar':
		$data['email'] =  $_POST['email'];
		$data['senha'] =  $_POST['senha'];

		break;

	case 'recuperarSenha':
		
		break;
	
	default:
		# code...
		break;
}