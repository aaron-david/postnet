<?php
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "From: contato@postnetcuritiba.com.br\n"; // remetente
$headers .= "Return-Path: contato@postnetcuritiba.com.br\n"; // return-path

mail("postnetcuritiba.com.br", "Apenas um teste", "Olá", $headers)
OR die ("Falha ao enviar e-mail.");
echo("Mensagem enviada com sucesso!");
?>