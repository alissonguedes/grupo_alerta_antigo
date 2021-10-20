<?php

require 'lib/class.phpmailer.php';

$mail_to = 'sac@grupoalertasv.com.br';
$name_to = 'SAC Grupo Alerta';

$mail_bcc1 = 'felipeweb26@hotmail.com';
$name_bcc1 = 'Luiz Felipe';

$mail_bcc2 = 'alissonguedes87@gmail.com';
$name_bcc2 = 'Alisson Guedes';

$assunto = "Contato pelo site GRUPO ALERTA";

$nomeContato = $_POST['nome'];
$emailContato = $_POST['email'];
$phoneContato = $_POST['phone'];
$cidadeContato = $_POST['cidade'];
$setorContato = $_POST['setor'];
$msgContato = $_POST['msg'];

$mensagem = '
	<html>
		<head>
			<title>' . $setorContato . '</title>
		</head>
		<body>
			<strong><h2>Contato pelo Site Grupo Alerta - ' . $setorContato . '</h2></strong>
			<br>
			<strong> Nome: </strong>  ' . $nomeContato . '<br>
			<strong> E-mail: </strong>  ' . $emailContato . '<br>
			<strong> Telefone: </strong>  ' . $phoneContato . '<br>
			<strong> Cidade: </strong>  ' . $cidadeContato . '<br>
			<strong> Mensagem: </strong><br>  ' . $msgContato . '
		</body>
	</html>
	';

// --------------- PHP MAILER ---------------

$mail = new PHPMailer();

try {

    $mail->Host = 'mail.grupoalertaweb.com.br';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->username = 'contato@grupoalertaweb.com.br';
    $mail->password = '73xZj+qUmSQ5';
    $mail->Port = 587;

    $mail->setFrom('contato@grupoalertaweb.com.br', 'Grupo Alerta');
    $mail->addAddress($mail_to, $name_to);
    
    // $mail->addBCC($mail_bcc1, $name_bcc1);
    // $mail->addBCC($mail_bcc2, $name_bcc2);
    
    $mail->Subject = $assunto;
    $mail->Body = $mensagem;
    $mail->isHTML(true);

    $mail->send();

    // echo 'Mensagem enviada com sucesso';
    header("Location: contato.php?msg=enviado");

} catch (phpmailerException $e) {
    echo $e->errorMessage();
}
