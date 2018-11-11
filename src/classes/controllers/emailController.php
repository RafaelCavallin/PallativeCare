<?php 


$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['mensagem'];
$data = date('d/n/Y');
$hora = date('H:i:s');

$destino = "rafael_cavallin@hotmail.com";
$assunto = "Contato site Palliative Care";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>';

$enviaremail = mail($destino, $assunto, $msg, $headers);
  if($enviaremail){
  	$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  	echo " <meta http-equiv='refresh' content='10;URL=src/classes/controllers/emailController.php'>";
  } else {
  	$mgm = "ERRO AO ENVIAR E-MAIL!";
  	echo "";
 }