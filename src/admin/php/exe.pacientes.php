<?php 
include_once ('./../classes/DbAdmin.php');
include_once ('./../classes/Paciente.php');

$sql = "SELECT id_paciente, nome_paciente, prontuario, data_nasc, contato, servico FROM paciente";
$filter = " WHERE id_usuario = ?";
$data = array($_SESSION['login']['idUsuario']);
$result = select($sql, $filter, $data);

?>
<!-- Form Pacientes -->
<div class="row mt-2 mb-4">
  <div class="col">
    <form name="FormPacientes" id="FormPacientes" method="post" action="../classes/controllers/pacienteController.php?acao=cadastrar">
      <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nomePaciente" class="form-control" required>
      </div>

      <div class="form-row">
        <div class="col-6">
          <div class="form-group">
            <label>Prontuário</label>
            <input type="text" name="prontuario" class="form-control" required>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label>Data de Nasc.</label>
            <input type="text" name="dataNasc" class="form-control" data-mask="00/00/0000" required>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-6">
          <label>Telefone</label>
          <input type="text" name="contato" class="form-control" data-mask="(00)00000-0000">
        </div>
        <div class="form-group col-6">
          <label>Serviço</label>
          <input type="text" name="servico" class="form-control">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-sm-12 col-md-6">
          <button type="submit" class="btn btn-primary form-control">Enviar</button>
        </div>
        <div class="form-group col-sm-12 col-md-6">
          <button type="reset" class="btn btn-secondary form-control">Cancelar</button>
        </div>
      </div>

    </form>
  </div>
</div>


<!-- Tabela de dados Pacientes -->
<div class="card mb-3"> 
  <div class="card-header">
  Pacientes Cadastrados</div>
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
                      <a href="#"><i class="fa fa-pencil-alt fa-lg text-info"></i></a>
                      <a class="ml-2" href="#"><i class="fa fa-chart-line fa-lg text-secondary"></i></a>
                      <a class="ml-2" href="#"><i class="fa fa-trash fa-lg text-danger"></i></a>
                    </td>';

              echo "</tr>";
              
            }

            
            
            
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>