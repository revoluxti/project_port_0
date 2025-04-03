<?php
$nome = addslashes ($_POST['nome']);
$email = addslashes ($POST['email']);
$telefone = addslashes ($_POST['telefone']);

$para = "revoluxti@gmail.com";
$assunto = "Contato-via-web-site/Revoluxti";

$corpo = "Nome: ".$nome. "\n"."E-mail: ".$email. "\n"."Telefone: ".$telefone;

$cabeca = "From: revoluxti@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mais($para,$assunto,$corpo,Scabeca)){
    acho("Email enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}

?>