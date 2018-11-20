<?php 
include_once ('./../classes/DbAdmin.php');
include_once ('./../classes/Paciente.php');

$sql = "SELECT id_paciente, nome_paciente, prontuario, data_nasc, contato, servico FROM paciente";
$filter = " WHERE id_paciente=? AND id_usuario = ?";
$data = array($_GET['id_p'], $_SESSION['login']['idUsuario']);
$result = select($sql, $filter, $data);

foreach ($result as $value) {
  $nome = $value['nome_paciente'];
  $prontuario = $value['prontuario'];
  $dataNasc = $value['data_nasc'];
  $tel = $value['contato'];
  $servico = $value['servico'];

  $dataBanco = explode("-", $dataNasc);
  $dataShowUser = $dataBanco[2] . "/" . $dataBanco[1] . "/" .$dataBanco[0];
}

$sql = "SELECT * FROM escala";
$resultEscala = select($sql);

?>

<div class="container">
  <span class="display-4"><?php echo $nome ?></span>


    <form action='#' method="POST" class="mt-4">
      <fieldset>
        <legend>Gráfico</legend>
      
      <div class="row">

        <div class="form-group col-md-4 col-sm-12">
          <label for="selecGrafico" class="lead">Escolha a escala:</label>
          <select name="selecGrafico" id="selecGrafico" class="form-control">
            <option value="">Selecione</option>
            
            <?php
              foreach ($resultEscala as $value) {
                echo "<option value=". $value['id_escala'] .">" . $value['nome_escala'] . "</option>";
              }
            ?>

          </select>
        </div>

        <div class="form-group col-md-4 col-sm-12">
          <label for="dataInicial" class="lead">Data Inicial:</label>
          <input type="text" name="dataInicial" id="dataInicial" class="form-control" data-mask="00/00/0000">  
        </div>

        <div class="form-group col-md-4 col-sm-12">
          <label for="dataFinal" class="lead">Data Final:</label>
           <input type="text" name="dataFinal" id="dataFinal" class="form-control" data-mask="00/00/0000">
        </div>

        <div class="form-group col-md-3 col-sm-12">
          <button type="submit" class="form-control btn btn-primary">Gerar Gráfico</button>
        </div>

      </div><!-- /row -->
      </fieldset>
    </form>


    <div class="row">
      <div class="col-12">
        
        <div id="chart" style="width: 100%; height: 500px"></div>

      </div>
      
    </div>

</div><!-- /container -->
