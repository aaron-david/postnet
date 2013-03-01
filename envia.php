<?php
 
/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
if (eregi('tempsite.ws$|postnetcuritiba.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {
        $emailsender='contato@postnetcuritiba.com.br'; // Substitua essa linha pelo seu e-mail@seudominio
} else {
        $emailsender = "contato@postnetcuritiba.com.br";
        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
        // Você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
}
 
/* Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */
if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
else $quebra_linha = "\n"; //Se "nÃ£o for Windows"
 
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$assunto = $_POST['select_assunto'];
$nome = $_POST['nome_completo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<p>Mensagem do site Postnet</p>
<p><b>Nome:</b> '.$nome.'</p>
<p><b>Telefone:</b> '.$telefone.'</p>
<p><b>E-mail:</b> '.$email.'</p>
<p><b>Assunto:</b> '.$assunto.'</p><hr />
<p><b>'.$mensagem.'</b></p><hr />';
 
 
/* Montando o cabeÃ§alho da mensagem */
$headers = "MIME-Version: 1.1" .$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8" .$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: " . $emailsender.$quebra_linha;
$headers .= "Cc: " . $comcopia . $quebra_linha;
$headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;
$headers .= "Reply-To: " . $emailremetente . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */

//É obrigatório o uso do parâmetro -r (concatenação do "From na linha de envio"), aqui na Locaweb:

if(!mail($emailsender, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emailsender, $assunto, $mensagemHTML, $headers );
}	

header("Location: enviado.php");
?>