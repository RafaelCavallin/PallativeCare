<?php 
ini_set( 'display_errors', 0 );

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

///////////////////////////////////
// Código para preencher o select "Escolha a escala"
$sql = "SELECT * FROM escala";
$resultEscala = select($sql);
///////////////////////////////////

//////////////////////////////////
// Código para preencher os dados para gerar o gráfico 
  if($_POST['acao'] = 'gerarGrafico'){
    $id_paciente = $_GET['id_p'];
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
      array_push($labels, setData($values['data_consulta'], 1));
    }

  }

$labelsJSON = json_encode($labels);
$resJSON = json_encode($resultEscalas);
//////////////////////////////////

?>

<div class="container">
  <!-- as DIVs com IDs labelsPHP, resPHP e escalaGraficoPHP são apenas para enviar os dados de PHP para JS através do JSON -->
  <div id="labelsPHP" style="display: none;"><?php echo $labelsJSON; ?></div>
  <div id="resPHP" style="display: none;"><?php echo $resJSON; ?></div>

  <span class="display-4"><?php echo $nome ?></span>

    <form action='index.php?pg=detalhes&id_p=<?php echo $_GET['id_p'] ?>&acao=gerarGrafico' method="POST" class="mt-4">
      <fieldset>
        <legend>Gráfico</legend>
      
      <div class="row">
        <input type="hidden" name="id_p" value="<?php echo $_GET['id_p'] ?>">

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
          <button type="submit" class="form-control btn btn-primary" id="gerarGrafico">Gerar Gráfico</button>
        </div>

      </div><!-- /row -->
      </fieldset>
    </form>

    <div class="row my-4">
      <div class="col-12">

        <canvas id="testAreaChart" width="100%" height="30"></canvas>

      </div>
      
    </div>
</div><!-- /container -->


<script src="vendor/chart.js/Chart.min.js"></script>
<script type="text/javascript">

 var labelsPHP = document.getElementById('labelsPHP').innerHTML
 var resPHP = document.getElementById('resPHP').innerHTML
 var labelsJSON = JSON.parse(labelsPHP)
 var resJSON = JSON.parse(resPHP)
 
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

var labels = labelsJSON;
var data = resJSON;
var targetId = 'testAreaChart';

createChart(labels, data, targetId);

function createChart(labels, data, targetId){
var ctx = document.getElementById(targetId);
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: labels,
    datasets: [{
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: data, 
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 10
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    },
  }
});
}
</script>