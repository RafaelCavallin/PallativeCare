<?php 

$arrayAnsiedade = array();
$arrayDepressao = array();

foreach ($_POST as $key => $value) {
	$primeira = str_split($key); 

	if ($primeira[0] == "A") {
		array_push($arrayAnsiedade, $value);
	}else{
		array_push($arrayDepressao, $value);
	}


}


echo array_sum($arrayDepressao) . "<br>";
echo array_sum($arrayAnsiedade);