<?php 
include_once ("../Conexao.php");
include_once ("../DbAdmin.php");

$acao = $_GET['acao'];

switch ($acao) {
	case 'cadastrar':

		if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['confSenha'])){
			echo "Todos os campos são obrigatórios";
		}else{
			if($_POST['senha'] != $_POST['confSenha']){
				echo "As senhas precisam ser iguais";
			}else{
				$data['nome'] = $_POST['nome'];
				$data['email'] =  $_POST['email'];
				$data['senha'] =  $_POST['senha'];

				$sql = "INSERT INTO usuario (nome_usuario, email, senha) VALUES (?, ?, ?)";

				if (insert($sql, $data)) {
					echo "Deu certo";
				}else {
					echo "Deu errado";
				}
			}
		}
		break;
	
	default:
		# code...
		break;
}