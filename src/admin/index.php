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
  </head>

  <body id="page-top">

    <?php include_once('php/exe.navBar.php'); ?>

    <div id="wrapper">

      <div id="content-wrapper">

        <div class="container-fluid">

            <?php
                // MENSAGEM APÓS CADASTRO/EXCLUSÃO
                    if (isset($_GET['msg']) AND $_GET['msg'] == 'insert') {
                        $msg = '<div id="alerta" class="alert alert-primary mt-3" role="alert">
                                    Cadastrado com Sucesso!
                                </div>';

                    }elseif (isset($_GET['msg']) AND $_GET['msg'] == 'del') {
                        $msg = '<div id="alerta" class="alert alert-success mt-3" role="alert">
                                    Excluido com Sucesso!
                                </div>';

                    }elseif (isset($_GET['msg']) AND $_GET['msg'] == 'up') {
                        $msg = '<div id="alerta" class="alert alert-success mt-3" role="alert">
                                    Alterado com Sucesso!
                                </div>';

                    }elseif (isset($_GET['msg']) AND $_GET['msg'] == 'sti') {
                        $msg = '<div id="alerta" class="alert alert-danger mt-3" role="alert">
                                    Senha atual incorreta. Senha não alterada!
                                </div>';

                    }elseif (isset($_GET['msg']) AND $_GET['msg'] == 'spi') {
                        $msg = '<div id="alerta" class="alert alert-danger mt-3" role="alert">
                                    Senhas precisam ser iguais. Senha não alterada!
                                </div>';

                    }elseif (isset($_GET['msg']) AND $_GET['msg'] == 'ptc') {
                        $msg = '<div id="alerta" class="alert alert-danger mt-3" role="alert">
                                    Preencha todos os campos. Senha não alterada!
                                </div>';

                    }elseif (isset($_GET['msg']) AND $_GET['msg'] == 'erro') {
                        $msg = '<div id="alerta" class="alert alert-danger mt-3" role="alert">
                                    Erro ao realizar a ação!
                                </div>';

                    }elseif (isset($_GET['msg']) AND $_GET['msg'] == 'reativado') {
                        $msg = '<div id="alerta" class="alert alert-success mt-3" role="alert">
                                    Paciente reativado!
                                </div>';
                    }else{
                        $msg = "";
                    }
                    echo $msg;  
                ?>   

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

    <script src="vendor/jquery/jquery.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.mask.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

    <!-- Script para esconder a mensagem -->
    <script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                $('#alerta').fadeOut(1000);
            }, 3000);
        });
    </script>

  </body>

</html>
