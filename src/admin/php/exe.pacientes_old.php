<?php 
include_once ('./../classes/DbAdmin.php');
include_once ('./../classes/Paciente.php');

$sql = "SELECT id_paciente, nome_paciente, prontuario, data_nasc, contato, servico FROM paciente";
$filter = " WHERE id_usuario = ?";
$data = array($_SESSION['login']['idUsuario']);
$result = select($sql, $filter, $data);


// Verifica se é um update ou insert
if(!isset($_GET['acao'])){
  $_GET['acao'] = 'insert';
  $nome = '';
  $prontuario = '';
  $dataShowUser = '';
  $tel = '';
  $servico = '';
}

if($_GET['acao'] == 'update'){

  $idPcaienteUpdate = $_GET['id_p'];

  $sqlUpdate = "SELECT nome_paciente, prontuario, data_nasc, contato, servico 
                FROM paciente";
  $filterUpdate = " WHERE id_paciente = ? AND id_usuario = ?"; 

  $dataUpdate = array($idPcaienteUpdate, $_SESSION['login']['idUsuario']);        

  $resultUpdate = select($sqlUpdate, $filterUpdate, $dataUpdate);

  foreach ($resultUpdate as $value) {
    $nome = $value['nome_paciente'];
    $prontuario = $value['prontuario'];
    $dataNasc = $value['data_nasc'];
    $tel = $value['contato'];
    $servico = $value['servico'];

    $dataBanco = explode("-", $dataNasc);
    $dataShowUser = $dataBanco[2] . "/" . $dataBanco[1] . "/" .$dataBanco[0];

  }
}
?>
<!-- Form Pacientes -->
<div class="container">
  <div class="row mt-2 mb-4">
    <div class="col">
      <form name="FormPacientes" id="FormPacientes" method="post" action="../classes/controllers/pacienteController.php?acao=<?php echo  $_GET['acao'] ?>">
        <div class="form-group">
          <input type="hidden" name="idPaciente" value="<?php echo $idPcaienteUpdate ?>">
          <label>Nome</label>
          <input type="text" name="nomePaciente" value="<?php echo $nome ?>" class="form-control" required>
        </div>

        <div class="form-row">
          <div class="col-6">
            <div class="form-group">
              <label>Prontuário</label>
              <input type="text" name="prontuario" value="<?php echo $prontuario ?>" class="form-control" required>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Data de Nasc.</label>
              <input type="text" name="dataNasc" value="<?php echo $dataShowUser ?>" class="form-control" data-mask="00/00/0000" required>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-6">
            <label>Telefone</label>
            <input type="text" name="contato" value="<?php echo $tel ?>" class="form-control" data-mask="(00)00000-0000">
          </div>
          <div class="form-group col-6">
            <label>Serviço</label>
            <input type="text" name="servico" value="<?php echo $servico ?>" class="form-control">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-12 col-md-5 align-self-end">
            <button type="submit" class="btn btn-primary form-control">Enviar</button>
          </div>
        </div>

      </form>
    </div>
  </div>  

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <form name="FormPacientes" id="FormPacientes" method="post" action="../classes/controllers/pacienteController.php?acao=<?php echo  $_GET['acao'] ?>">
        <div class="form-group">
          <input type="hidden" name="idPaciente" value="<?php echo $idPcaienteUpdate ?>">
          <label>Nome</label>
          <input type="text" name="nomePaciente" value="<?php echo $nome ?>" class="form-control" required>
        </div>

        <div class="form-row">
          <div class="col-6">
            <div class="form-group">
              <label>Prontuário</label>
              <input type="text" name="prontuario" value="<?php echo $prontuario ?>" class="form-control" required>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Data de Nasc.</label>
              <input type="text" name="dataNasc" value="<?php echo $dataShowUser ?>" class="form-control" data-mask="00/00/0000" required>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-6">
            <label>Telefone</label>
            <input type="text" name="contato" value="<?php echo $tel ?>" class="form-control" data-mask="(00)00000-0000">
          </div>
          <div class="form-group col-6">
            <label>Serviço</label>
            <input type="text" name="servico" value="<?php echo $servico ?>" class="form-control">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-12 col-md-5 align-self-end">
            <button type="submit" class="btn btn-primary form-control">Enviar</button>
          </div>
        </div>

      </form>
        </div>
      </div>
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
                      <a href="index.php?pg=pacientes&acao=update&id_p=' . $key['id_paciente'] . '"><i class="fa fa-pencil-alt fa-lg text-info"></i></a>

                      <a class="ml-2" href="index.php?pg=detalhes&id_p=' . $key['id_paciente'] . '"><i class="fa fa-chart-line fa-lg text-secondary"></i></a>

                      <a class="ml-2" href="./../classes/controllers/pacienteController.php?acao=delete&id_p=' . $key['id_paciente'] . '"><i class="fa fa-trash fa-lg text-danger" id="deleteRegistro"></i></a>
                    </td>';

              echo "</tr>";
            }
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

<script>
  
  function delete(codigo) {  
    if (confirm('Excluir a categoria?')) {  
        location.href = '../excluircategoria.do?codigo=' + codigo;
    }
 }

</script>