<?php
include_once('Pessoa.php');
include_once('Pessoa2.php');

$p1 = new Pessoa;
$p1->setNome("Rafael");

echo $p1->getNome();

echo "<br>  ++++++++++++++++++++++++++++++++++++  <br>";

$p2 = new Pessoa2;
$p2->nome = "Rafael";
echo $p2->nome;
