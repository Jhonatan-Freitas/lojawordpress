<?php
    
    echo"<p>EMAIL: ".$_POST['email']."</p>";
    echo"<p>ASSUNTO: ".$_POST['assunto']."</p>";
    echo"<p>MENSAGEM: ".$_POST['mensagem']."</p>";

    $emaildestinatario = "itjhonatan01@gmail.com";
    $headers           = "From: ".$_POST['email']."\n";
    $emailsender       = "From: ".$_POST['email']."\n";
    $assunto           = $_POST['assunto'];
    $mensagemHTML      = $_POST['mensagem'];

    if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r".$emailsender)){
        $headers .= "Return-Path: " . $emailsender;
        mail($emaildestinatario, $assunto, $mensagemHTML, $headers);
        echo"<h3>E-mail enviado com sucesso!</h3>";
    }else{
        echo"<h3>Falha ao enviar o e-mail</h3>";
    }

?>
    
