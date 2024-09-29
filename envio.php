<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = "rodneyroque@hotmail.com";
    $assunto = "Contato Magen";

    $body = "Nome: ".$nome."\n"."Email: ".$email."\n"."Mensagem: ".$mensagem;

    $header = "From:rodneyroque@hotmail.com"."\n"."Reply-To:".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$assunto,$body,$header)){
        echo("A mensagem foi enviada com sucesso!");
    }else{
        echo("Houve um erro ao enviar a mensagem");
    }

?>