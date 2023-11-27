<?php

session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST['enviar'])){

    $mail = new PHPMailer(true);

try {
    //Configuração de variáveis

    function sanitizeInput($input) {
        $filtered = filter_var($input, FILTER_SANITIZE_STRING);
        $sanitized = htmlspecialchars($filtered, ENT_QUOTES, 'UTF-8');
        return $sanitized;
    }

    $email = sanitizeInput($_POST['txtemail']);
    $assunto = sanitizeInput($_POST['txtassunto']);
    $mensagem = sanitizeInput($_POST['txtmensagem']);

    $mensagem = mb_strimwidth($mensagem, 0, 100000);



    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();                                            
    $mail->Host       = 'mail.atlasacoealuminio.com.br';                   
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'locacao@atlasacoealuminio.com.br';                     
    $mail->Password   = 'Locacao@23';                                
    $mail->SMTPSecure = 'ssl';            
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('locacao@atlasacoealuminio.com.br', 'Mailer');
    $mail->addAddress('locacao@atlasacoealuminio.com.br', 'Atlas Locações');     
    $mail->addReplyTo('locacao@atlasacoealuminio.com.br', 'Information');
   
    //Content
    $mail->isHTML(true);               
    $mail->CharSet = 'UTF-8';
    $mail->Subject = $assunto;
    
    $body = "<strong>Solicitação de Orçamento através do site</strong> <br><br>
    <strong>Informações: </strong><br><br>
    <p>Email do cliente:" . $email . "</p><br><br>
    <p>Mensagem:<br>" . $mensagem . "</p>";
    
    
    $mail->Body    = $body;
    $mail->send();
    echo 'Email Enviado com Sucesso';
    $_SESSION['success'] = true;
    header('Location: index.php');
} catch (Exception $e) {
    echo "Erro ao enviar o email: {$mail->ErrorInfo}";
}

}else{
    echo "Erro ao enviar e-mail!";
}