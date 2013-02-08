<?php
$assunto = $_POST[select_assunto];
$nome = $_POST[nome_completo];
$telefone = $_POST[telefone];
$email = $_POST[email];
$mensagem = $_POST[mensagem];

// multiple recipients
$to  = 'aaron.dsgn@gmail.com';
// subject
$subject = $assunto;

// message
$message = "
<html>
<head>
 <title>Contato</title>
</head>
<body>
<p>Dados do contato</p>
<table>
 <tr>
  <th>Nome</th><td>$nome</td>
 </tr>
 <tr>
  <th>Telefone</th><td>$telefone</td>
 </tr>
 <tr>
  <th>E-mail</th><td>$email</td>
 </tr>
 <tr>
  <th>Assunto</th><td>$assunto</td>
 </tr>
 <tr>
  <th>Mensagem</th><td>$mensagem</td>
 </tr>
</table>
</body>
</html>
";

/* Atenção se você pretende inserir numa variável uma mensagem html mais
 complexa do que essa sem precisar escapar os carateres 
 necessários pode ser feito o uso da sintaxe heredoc, consulte tipos-string-sintaxe-heredoc */

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>' . "\r\n";
$headers .= 'From: PostNet Curitiba <aaron.dsgn@gmail.com>' . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
if(mail($to, $subject, $message, $headers))
	header("Location: enviado.php");
else
	// echo "Sua mensagem não foi enviada";
	header("Location: enviado.php");
?>