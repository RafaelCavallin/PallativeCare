<?php 
$total = array();

$total['radioAnorexia'] = $_POST['radioAnorexia'];
$total['radioDispneia'] = $_POST['radioDispneia'];
$total['radioKps'] = $_POST['radioKps'];
$total['radioSobrevivencia'] = $_POST['radioSobrevivencia'];
$total['radioLeucocitaria'] = $_POST['radioLeucocitaria'];
$total['radioLinfocitos'] = $_POST['radioLinfocitos'];

var_dump($total);

echo array_sum($total); 