<?php 
session_start();
include_once ("../Conexao.php");
include_once ("../DbAdmin.php");

$acao = $_GET['acao'];

switch ($acao) {

	case 'logar':

	if (!isset( $_POST['email']) && !isset( $_POST['senha'])) {
		header('Location:../../../index.php?pg=login');
	}else{

		$data = array($_POST['email'], md5($_POST['senha'])); 

		$sql = "SELECT id_usuario, nome_usuario  FROM usuario";
		$filter = " WHERE email = ? AND senha = ?";

		$usuario = select($sql, $filter, $data);
		foreach ($usuario as $key) {
			$_SESSION['login']['idUsuario'] = $key['id_usuario'];
			$_SESSION['login']['nomeUsuario'] = $key['nome_usuario'];
			$_SESSION['login']['log'] = 'logado';
		}

		if(count($usuario)){
			header('Location:../../admin/index.php');
		}else{
			header('Location:../../../index.php?pg=login'); 
		}
	}
	break;

	case 'logout':
		//session_unset();
		session_destroy();
		header('Location:../../../index.php');
	break;

	case 'recuperarSenha':
		
	break;
	
	default:
		# code...
	break;
}