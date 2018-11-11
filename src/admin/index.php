<?php 
session_start();
//Verifica se há uma session válida.
    if(!isset($_SESSION['login']['log']) and empty($_SESSION['login']['log'])){
        header('Location:../../index.php?pg=login');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Palliative Care - Administração</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'PPS_Carlos'],
          ['01/09',  90],
          ['08/09',  80],
          ['15/09',  50],
          ['22/09',  70],
          ['29/09',  40]
        ]);

        var options = {
          title: 'Escala PPS',
          subtitle: '',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart'));

        chart.draw(data, options);
      }
    </script>

  </head>

  <body id="page-top">

    <?php include_once('php/exe.navBar.php'); ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php include_once('php/exe.siderBar.php'); ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <?php 
            // CARREGAMENTO DAS PÁGINAS
            if (isset($_GET['pg']) and !empty($_GET['pg'])) {
                $pag = $_GET['pg'];
            }else{
                $pag = 'home';
            }
                include_once('php/exe.' . $pag .'.php');
          ?>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php include_once('php/exe.footer.php'); ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.mask.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
