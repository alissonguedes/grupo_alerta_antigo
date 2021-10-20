<?php
require('lib/class.phpmailer.php');

$emailDominio = "tactcwebcg@gmail.com";
$nomeDominio = "GRUPO ALERTA";

$mail_to = 'comercial3@grupoalertasv.com.br';
$name_to = '';

$mail_cc = 'financeiro3@grupoalertasv.com.br';
$name_cc = '';

$mail_bcc1 = 'felipeweb26@hotmail.com';
$name_bcc1 = 'Luiz Felipe';

$mail_bcc2 = 'alissonguedes87@gmail.com';
$name_bcc2 = 'Alisson Guedes';

$assunto = "Orçamento pelo site GRUPO ALERTA";

$nomeContato = $_POST['nome'];
$emailContato = $_POST['email'];
$foneContato = $_POST['fone'];
$endereçoContato = $_POST['endereço'];
$cidadeContato = $_POST['cidade'];
$ufContato = $_POST['uf'];
$servContato = $_POST['serv'];
$outroContato = $_POST['outro'];

$servicos = '';

foreach ($servContato as $value) {
  $servicos .= $value . '<br>';
}

$mensagem = '
<html>
    <head>

    </head>
    <body>
        <strong><h2>Orçamento pelo Site Grupo Alerta</h2></strong>
        <br>
        <strong> Nome: </strong><br>  ' . $nomeContato . '<br><br>
        <strong> E-mail: </strong><br>  ' . $emailContato . '<br><br>
		<strong> Telefone: </strong><br>  ' . $foneContato . '<br><br>
        <strong> Endereço: </strong><br>  ' . $endereçoContato . '<br><br>
		<strong> Estado: </strong><br>  ' . $ufContato . '<br><br>
        <strong> Serviço(s): </strong><br>' . $servicos . '<br>
        <strong> Outro Serviço: </strong><br>' . $outro . '<br>
    </body>
</html>
';

$mail = new PHPMailer(true);

try {

    $mail->Host = 'mail.grupoalertaweb.com.br';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->username = 'contato@grupoalertaweb.com.br';
    $mail->password = '73xZj+qUmSQ5';
    $mail->Port = 587;

    $mail->setFrom('contato@grupoalertaweb.com.br', 'Grupo Alerta');
    $mail->addAddress($mail_to, $name_to);
    $mail->addCC($mail_cc, $name_cc);
    
    // $mail->addBCC($mail_bcc1, $name_bcc1);
    // $mail->addBCC($mail_bcc2, $name_bcc2);
    
    $mail->Subject = $assunto;
    $mail->Body = $mensagem;
    $mail->isHTML(true);

    $mail->send();

    // echo 'Mensagem enviada com sucesso';
    header("Location: orcamento.php?msg=enviado");

} catch (phpmailerException $e) {
    echo $e->errorMessage();
}

?>
