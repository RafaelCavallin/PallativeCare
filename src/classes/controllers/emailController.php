<?php 

$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['mensagem'];
$data = date('d/n/Y');
$hora = date('H:i:s');

$destino = "rafael.cavallin89@gmail.com";
$assunto = "Contato site Palliative Care";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: ' . $email;

	if(mail($destino, $assunto, $msg, $headers)){
  		echo "Enviada com sucesso";
  	}else{
  		echo "Erro ao enviar";
 	}