<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if (isset($_POST['submit'])) {   # If button submit pressed
    $name = $_POST['name'];
    $sender = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer;
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.buzondecorreo.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'no-reply@brandink.es';
    $mail->Password = 'BranLuc2018';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mailTo = "hola@brandink.es";

    $mail->setFrom('no-reply@brandink.es');
    $mail->AddAddress($mailTo, $name);
    $mail->IsHTML(true);
    $mail->Subject = 'New message via your website, from ' .$sender;
    $mail->Body = "
    <p><strong>Tienes un mensaje nuevo via:</strong> https://www.brandink.es/</p><br>
    <p><strong><u>Detalles del mensaje</u></strong></p>
    <p><strong>Nombre: </strong>" .$name. "</p>
    <p><strong>Email: </strong>" .$sender. "</p>
    <p><strong>Mensaje: </strong>" .$message. "</p><br>
    <p><strong>Enviado: </strong>" .date("Y/m/d"). "</p>";
    
    if($mail->Send()) {
        #header("Location: index.php?mailsend");
        echo "myFunction()";
        http_response_code(200);
        var_dump(http_response_code());
    }
    else {
        echo '{"emailFailed":'.$mail->ErrorInfo.'}';
        http_response_code(404);
        var_dump(http_response_code());
    }
}