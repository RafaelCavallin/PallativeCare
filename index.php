<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Palliative Care</title>
</head>
<body>
    <?php include_once('php/exe.menu.php'); ?>
    
    <?php 
        // CARREGAMENTO DAS PÁGINAS
        if (isset($_GET['pg']) and !empty($_GET['pg'])) {
            $pag = $_GET['pg'];
        }else{
            $pag = 'home';
        }
        include_once('php/exe.' . $pag .'.php');
    ?>
    
    <?php include_once('php/exe.footer.php'); ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>