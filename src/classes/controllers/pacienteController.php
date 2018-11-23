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

				if (executar($sql, $data)) {
					header('Location: ../../admin/index.php?pg=pacientes&msg=insert');
				}else{
					header('Location: ../../admin/index.php?pg=pacientes&msg=erro');
				}
			}
		break;

	case 'update':
		$dataNascArray = explode("/", $_POST['dataNasc']);
		$dataNasc = $dataNascArray[2] . "-" . $dataNascArray[1] . "-" .$dataNascArray[0];

		if (isset($_POST['ativo'])) {
					$ativo = 1;
				}else{
					$ativo = 0;
				}

		$data = array($_POST['nomePaciente'], $_POST['prontuario'], $dataNasc, $_POST['contato'], $_POST['servico'], $ativo, $_POST['idPaciente']);

		$sql = "UPDATE paciente SET nome_paciente = ?, prontuario = ?, data_nasc = ?, contato = ?, servico = ?, ativo = ? WHERE id_paciente = ?";
		//$filter = " WHERE id_paciente = ?";

		if(executar($sql, $data)){
			header('Location: ../../admin/index.php?pg=pacientes&msg=up');
		}else{
			header('Location: ../../admin/index.php?pg=pacientes&msg=erro');
		}
		break;

	case 'delete':
		$data = array($_GET['id_p'], $_SESSION['login']['idUsuario']);
		$sql = "DELETE FROM paciente WHERE id_paciente=? AND id_usuario=?";

		if (executar($sql,$data)) {
			header('Location: ../../admin/index.php?pg=pacientesInativos&msg=del');
		}else{
			header('Location: ../../admin/index.php?pg=pacientes&msg=erro');
		}
		break;

	case 'reativar':
		
		if (isset($_POST['reativarId'])) {
			$sqlReativa = "UPDATE paciente SET ativo = ? WHERE id_paciente = ?";
			$dataReativa = array(1, $_POST['reativarId']);

			if (executar($sqlReativa, $dataReativa)) {
				header('Location: ../../admin/index.php?pg=pacientes&msg=reativado');
			}

		}else{
			header('Location: ../../admin/index.php?pg=pacientesInativos');
		}

		break;

	case 'gerarGrafico':

	$id_paciente = $_POST['id_p'];
	$id_escala = $_POST['selecGrafico'];
	$dataInicial = setData($_POST['dataInicial'], 0);
	$dataFinal = setData($_POST['dataFinal'], 0);

	$sqlGraf = "SELECT consulta_escala.resultado_escala, consulta.data_consulta FROM consulta_escala INNER JOIN consulta ON consulta_escala.id_consulta_geral = consulta.id_consulta";
	$filterGraf = " WHERE consulta_escala.id_escala_utilizada = ? AND consulta_escala.id_paciente = ? AND (consulta.data_consulta BETWEEN ? AND ?)";
	$dataGraf = array($id_escala, $id_paciente, $dataInicial, $dataFinal);

	$resultgraf = select($sqlGraf, $filterGraf, $dataGraf);

	$labels = array();
	$resultEscalas = array();


	foreach ($resultgraf as $values){
		array_push($resultEscalas, $values['resultado_escala']);
		array_push($labels, $values['data_consulta']);
	}

		break;
	
	default:
		# code...
		break;
}
