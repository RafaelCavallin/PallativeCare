<?php 

$total = array();

$total['dados']['paciente'] = $_POST['paciente'];
$total['dados']['prontuario'] = $_POST['prontuario'];
$total['dados']['cuidador'] = $_POST['cuidador'];
$total['dados']['data'] = $_POST['data'];
$total['dados']['grauParentesco'] = $_POST['grauParentesco'];
$total['dados']['idade'] = $_POST['idade'];
$total['dados']['escolaridade'] = $_POST['escolaridade'];

$total['per']['radioTempo'] = $_POST['radioTempo'];
$total['per']['radioStress'] = $_POST['radioStress'];
$total['per']['radioAmigos'] = $_POST['radioAmigos'];
$total['per']['radioExausto'] = $_POST['radioExausto'];
$total['per']['radioSaude'] = $_POST['radioSaude'];
$total['per']['radioControle'] = $_POST['radioControle'];
$total['per']['radioSobrecarregado'] = $_POST['radioSobrecarregado'];

var_dump($total); 


echo array_sum($total['per']);
