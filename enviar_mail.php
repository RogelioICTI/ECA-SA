<?php

$nombre = $_POST['first_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
$robot = $_POST['robot'];

if ($robot != 28) {
    $array_salida = array(
        'error' => 'si',
        'alerta' => 'alert-warning',
        'mensaje' => 'Lo siento eres un robot',
    );
} else {
    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;


    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'rogelio.vargas.marquez@gmail.com';                 // SMTP username
    $mail->Password = 'IChawk666999';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('eca@example.com', 'Contacto desde ECA-WEB');
    $mail->addAddress('rogelio.vargas.marquez@gmail.com', 'Rogelio');     // Add a recipien

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Contacto: ' . $nombre;
    $mail->Body = '<b>Nombre:</b>' . $nombre . '<br/>'
            . '<b>Teléfono:</b>' . $phone . '<br/>'
            . '<b>E-Mail:</b>' . $email . '<br/>'
            . '<b>Comentario:</b>' . $comment . '<br/>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        $array_salida = array(
            'error' => 'si',
            'alerta' => 'alert-danger',
            'mensaje' => 'El mensaje no pudo ser enviado. por favor, intenta de nuevo.',
        );
    } else {
        $array_salida = array(
            'error' => 'no',
            'alerta' => 'alert-success',
            'mensaje' => 'El mensaje fue enviado con éxito. En breve nos comunicaremos contigo.',
        );
    }
}
echo json_encode($array_salida);
