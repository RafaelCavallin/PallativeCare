<?php
session_start();
include_once ("../DbAdmin.php");

$acao = $_GET['acao'];

switch ($acao) {
	case 'insert':
			if(empty($_POST['nomePaciente']) || empty($_POST['prontuario']) || empty($_POST['dataNasc'])){
				echo "Campos!!";
			}else{
				if (isset($_POST['ativo'])) {
					$ativo = 1;
				}else{
					$ativo = 0;
				}

				$dataNascArray = explode("/", $_POST['dataNasc']);
				$dataNasc = $dataNascArray[2] . "-" . $dataNascArray[1] . "-" .$dataNascArray[0];

				//Verificar função setData();
				//$dataNasc = setData($_POST['dataNasc'], 0);

				$data = array($_POST['nomePaciente'], $_POST['prontuario'], $dataNasc, $_POST['contato'], $_POST['servico'], $_SESSION['login']['idUsuario'], $ativo);
				$sql = "INSERT INTO paciente (nome_paciente, prontuario, data_nasc, contato, servico, id_usuario, ativo) VALUES (?, ?, ?, ?, ?, ?, ?)";

				if (insert($sql, $data)) {
					header('Location: ../../admin/index.php?pg=pacientes');
				}else{
					echo "Deu erro";
				}
			}
		break;

	case 'update':

		$dataNascArray = explode("/", $_POST['dataNasc']);
		$dataNasc = $dataNascArray[2] . "-" . $dataNascArray[1] . "-" .$dataNascArray[0];

		$data = array($_POST['nomePaciente'], $_POST['prontuario'], $dataNasc, $_POST['contato'], $_POST['servico'], $_POST['idPaciente']);

		$sql = "UPDATE paciente SET nome_paciente = ?, prontuario = ?, data_nasc = ?, contato = ?, servico = ? WHERE id_paciente = ?";
		//$filter = " WHERE id_paciente = ?";

		if(insert($sql, $data)){
			header('Location: ../../admin/index.php?pg=pacientes');
		}else{
			echo "Deu erro";
		}



		break;

	case 'delete':

	$data = array($_GET['id_p'], $_SESSION['login']['idUsuario']);
	$sql = "DELETE FROM paciente WHERE id_paciente=? AND id_usuario=?";

	if (insert($sql,$data)) {
		header('Location: ../../admin/index.php?pg=pacientes');
	}else{
		echo "Deu pau";
	}
	
	break;
	
	default:
		# code...
		break;
}
