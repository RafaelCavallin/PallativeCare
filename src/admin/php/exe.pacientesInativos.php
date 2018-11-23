<?php 
include_once ('./../classes/DbAdmin.php');
include_once ('./../classes/Paciente.php');

$sql = "SELECT id_paciente, nome_paciente, prontuario, data_nasc, contato, servico FROM paciente";
$filter = " WHERE id_usuario = ? AND ativo = 0";
$data = array($_SESSION['login']['idUsuario']);
$result = select($sql, $filter, $data);

?>
<!-- Form Pacientes -->
<div class="container">
  <!-- Tabela de dados Pacientes -->
  <div class="card mb-3"> 
    <div class="card-header">
      <h2 class="lead">Pacientes Inativos</h2>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Prontuário</th>
              <th>Data Nasc.</th>
              <th>Contato</th>
              <th>Serviço</th>
              <th>Ações</th>
              <th></th>
            </tr>
          </thead>

          <tbody>

            <?php 
            foreach ($result as $key) {

              $dataArray = explode("-", $key['data_nasc']);
              $data = $dataArray[2] . "/" . $dataArray[1] . "/" .$dataArray[0];

              echo "<tr>";
              echo '<td>' . $key['nome_paciente'] . '</td>';
              echo '<td>' . $key['prontuario'] . '</td>';
              echo '<td>' . $data . '</td>';
              echo '<td>' . $key['contato'] . '</td>';
              echo '<td>' . $key['servico'] . '</td>';
              echo '<td>
              <a href="index.php?pg=pacientes&acao=update&id_p=' . $key['id_paciente'] . '"><i class="fa fa-pencil-alt fa-lg text-info"></i></a>

              <a class="ml-2" href="index.php?pg=detalhes&id_p=' . $key['id_paciente'] . '"><i class="fa fa-chart-line fa-lg text-secondary"></i></a>

              <a class="ml-2" id="deleteRegistro" href="./../classes/controllers/pacienteController.php?acao=delete&id_p=' . $key['id_paciente'] . '"><i class="fa fa-trash fa-lg text-danger"></i></a>

              </td>';
              echo '<td>
              			<form action="./../classes/controllers/pacienteController.php?acao=reativar" method="POST">
              				<input type="hidden" name="reativarId" value=' . $key['id_paciente'] . '>
              				<button type="submit" class="btn btn-outline-success">Ativar</button>
              			</form>
              			
               		</td>';
              echo "</tr>";
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- /Tabela de dados pacientes -->
</div>

<script type="text/javascript">
  


</script>