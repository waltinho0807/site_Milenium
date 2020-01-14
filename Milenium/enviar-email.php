<?php
// Recebendo dados do formulário
$name = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$message = $_POST['mensagem'];
$subject = "Mensagem do Site";

$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "Formulário da página de contato <br>";
$corpo .= "Nome: " . $name . " <br>";
$corpo .= "assunto: " . $assunto . " <br>";
$corpo .= "Email: " . $email . " <br>";
$corpo .= "Mensagem: " . $message . " <br>";

// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'waltinhocalegari@hotmail.com';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

if ($status):
  // Enviada com sucesso
  header('location:contato.php?status=sucesso');
else:
  // Se der erro
  header('location:contato.php?status=erro');
endif;
?>