<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mensagem_erro = "";
$mensagem_sucesso = "";

require 'vendor/autoload.php'; // O caminho para o arquivo autoload.php pode variar dependendo do seu projeto

$mail = new PHPMailer(true);


$mail->isSMTP();
$mail->Host = 'smtp.outlook.com';
$mail->SMTPAuth = true;
$mail->Username = 'seu email';
$mail->Password = 'sua senha';
$mail->SMTPSecure = 'tls'; // Use 'tls' ou 'ssl' dependendo das configurações do seu servidor
$mail->Port = 587; // Porta SMTP


$mail->setFrom('seu email', 'Cliente');
$mail->addAddress('email recebedor', 'Luyan');

$mail->isHTML(true);
$mail->Subject = 'Quero saber mais';
$mail->Body = 'Olá gostaria de saber mais sobre os produtos secullum e relógio de ponto e tirar uma dúvidas.';

 // Coleta os dados do formulário
 $nome = $_POST["nome"];
 $email = $_POST["email"];
 $tel = $_POST["tel"];
 $obs = $_POST["obs"];

 // Monta a mensagem com os dados do formulário
 $mensagem_completa = "Nome: $nome<br>";
 $mensagem_completa .= "Email: $email<br>";
 $mensagem_completa .= "Telefone: $tel<br>";
 $mensagem_completa .= "Mensagem: $obs";

 $mail->MsgHTML($mensagem_completa);

 // Envie o e-mail
 if ($mail->send()) {
    header("Location: index.php");
    exit();
 } else {
    $mail->ErrorInfo;
 }

?>
