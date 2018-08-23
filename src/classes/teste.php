<?php
include_once('Paciente.php');

$p = new Paciente();
$p->nome = "João";
$p->prontuario = "0085GU";
$p->dataNasc = "22/01/1999";
$p->contato = "Maria";

echo $p;
