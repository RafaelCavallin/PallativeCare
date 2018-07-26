<?php 
$total = array();

$total['radioTensoContraido'] = $_POST['radioTensoContraido'];
$total['radioGostoCoisas'] = $_POST['radioGostoCoisas'];
$total['radioSentimentoRuim'] = $_POST['radioSentimentoRuim'];
$total['radioRisadaDiversao'] = $_POST['radioRisadaDiversao'];
$total['radioCabecaCheia'] = $_POST['radioCabecaCheia'];
$total['radioSentimentoAlegre'] = $_POST['radioSentimentoAlegre'];
$total['radioVontadeRelaxado'] = $_POST['radioVontadeRelaxado'];
$total['radioPensarFazer'] = $_POST['radioPensarFazer'];
$total['radioFrioBarriga'] = $_POST['radioFrioBarriga'];
$total['radioCuidarAparencia'] = $_POST['radioCuidarAparencia'];
$total['radioInquieto'] = $_POST['radioInquieto'];
$total['radioAnimado'] = $_POST['radioAnimado'];
$total['radioPanico'] = $_POST['radioPanico'];
$total['radioPrazerTv'] = $_POST['radioPrazerTv'];



var_dump($total);

echo array_sum($total); 