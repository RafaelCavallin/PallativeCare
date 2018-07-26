<?php 
$total = array();

$total['radioDor'] = $_POST['radioDor'];
$total['radioCansaco'] = $_POST['radioCansaco'];
$total['radioSono'] = $_POST['radioSono'];
$total['radioNausea'] = $_POST['radioNausea'];
$total['radioApetite'] = $_POST['radioApetite'];
$total['radioTristeza'] = $_POST['radioTristeza'];
$total['radioAnsiedade'] = $_POST['radioAnsiedade'];
$total['radioMalEstar'] = $_POST['radioMalEstar'];
$total['radioDispneia'] = $_POST['radioDispneia'];
$total['radioOutros'] = $_POST['radioOutros'];
$total['radioOutrosNome'] = $_POST['nameOther'];


var_dump($total);

echo array_sum($total); 