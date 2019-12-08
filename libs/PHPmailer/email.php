<?php
require_once('../../model/Usuario.php');
require dirname(__FILE__).'/vendor/autoload.php';
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$user = new Usuario();
$oJson = '';
$data = null;
$user->setUser($_REQUEST['email']);
$data = $user->vEmail();

if($data){
    try {
        //Server settings
        $mail->SMTPSecure = 'ssl';
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'soportepymestecnm@gmail.com';                     // SMTP username
        $mail->Password   = 'rosa2019';                               // SMTP password
        $mail->Port       = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('soportepymetecnm@gmail.com', 'Soporte Pymes');
        $mail->addAddress($_REQUEST['email']);     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Datos de acceso';
        $mail->Body .= "<center><h1 style='color:#3498db;'>Recuperacion de contrase&ntilde;a</h1></center>";
        $mail->Body .= "<p>Estimado usuario, ha solicitado la recuperacion de contrase&ntilde;a para acceso a la plataforma.</p>";
        $mail->Body .= "<h3>Usuario: ".$data[0][0]."</h3>";
        $mail->Body .= "<h3>Contrase&ntilde;a: ".$data[0][1]."</h3>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
            $oJson = '{
                "success":true,
                "respuesta":"Se han enviado los datos de acceso a su correo."
            }';
    } catch (Exception $e) {
        $oJson = '{
                "success":false,
                "respuesta":"Error en el servicio de correo eléctronico."
            }';
    }
}else{
    $oJson = '{
        "success":false,
        "respuesta":"La cuenta ingresada no se encuentra registrada."
    }';
}
header('Content-type: application/json');
echo $oJson;