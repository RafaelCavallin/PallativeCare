<?php 
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
				//Verifica se o email já existe no banco.
				$verEmail = array($_POST['email']);
				$sql = "SELECT * FROM usuario";
				$filter = " WHERE email = ?";

				if (count(select($sql, $filter, $verEmail))) {
					echo "Já existe";
				}else{
					// Se o email não existir no banco realiza o cadastro.
					$data = array($_POST['nome'],  $_POST['email'], md5($_POST['senha']));
					$sql = "INSERT INTO usuario (nome_usuario, email, senha) VALUES (?, ?, ?)";

					if (insert($sql, $data)) {
						header('Location:../../admin/index.php');
					}else {
						echo "Deu errado";
					}
				}				
			}
		}
		break;
	
	default:
		# code...
		break;
}