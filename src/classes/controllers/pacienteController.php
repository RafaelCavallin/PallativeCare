<?php
session_start();
include_once ("../DbAdmin.php");

$acao = $_GET['acao'];

switch ($acao) {
	case 'cadastrar':
			if(empty($_POST['nomePaciente']) || empty($_POST['prontuario']) || empty($_POST['dataNasc'])){
				echo "Campos!!";
			}else{

				$dataNascArray = explode("/", $_POST['dataNasc']);
				$dataNasc = $dataNascArray[2] . "-" . $dataNascArray[1] . "-" .$dataNascArray[0];

				//Verificar função setData();
				//$dataNasc = setData($_POST['dataNasc'], 0);

				$data = array($_POST['nomePaciente'], $_POST['prontuario'], $dataNasc, $_POST['contato'], $_POST['servico'], $_SESSION['login']['idUsuario']);
				$sql = "INSERT INTO paciente (nome_paciente, prontuario, data_nasc, contato, servico, id_usuario) VALUES (?, ?, ?, ?, ?, ?)";

				if (insert($sql, $data)) {
					header('Location: ../../admin/index.php?pg=pacientes');
				}else{
					echo "Deu erro";
				}

			}
			
			
		break;

	case 'alterar':

		break;

	case 'deletar':

		break;
	
	default:
		# code...
		break;
}
