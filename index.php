<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Palliative Care</title>
</head>
<body>
    <?php include_once('src/php/exe.menu.php'); ?>

    <div class="wrapper">

        <?php 
            // CARREGAMENTO DAS PÁGINAS
            if (isset($_GET['pg']) and !empty($_GET['pg'])) {
                 $pag = $_GET['pg'];
            }else{
                $pag = 'home';
            }
            include_once('src/php/exe.' . $pag .'.php');
                
        ?>

    </div><!-- /wrapper -->

    <?php include_once('src/php/exe.footer.php'); ?>

    <script src="src/js/jquery.min.js"></script>
    <script src="src/js/popper.min.js"></script>
    <script src="src/js/bootstrap.min.js"></script>
    <script src="src/js/jquery.mask.js"></script>
</body>
</html>