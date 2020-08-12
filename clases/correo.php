<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

class Correo{

    function recuperarCorreo($correo_recuperar, $nombre_usuario_recuperar,$contraseña_temporal){

        $mail = new PHPMailer(true);
        $objresponse = new stdClass();
        $data = array();
    
    try {
        //Server settings           // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'haciendopuebloviejo@gmail.com';                    // SMTP username
        $mail->Password   = 'mouseyteclado';                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587; 
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );                                   // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('haciendopuebloviejo@gmail.com', 'Gerencia General');
        $mail->addAddress($correo_recuperar, $nombre_usuario_recuperar);     // Add a recipient        // Name is optional
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Restaurar Contraseña';
        $mail->Body    = 

            '<h4>Ingrese a su cuenta con esta nueva contraseña  </h4>'.$contraseña_temporal;
    
        $mail->send();
        
    
        $objresponse->status = 1;
        $objresponse->data= "Cambio Realizado correctamente.";
        
        return$data = $objresponse;
         
    
    } catch (Exception $e) {
    
        $mail->ErrorInfo;
        $objresponse->status = 0;
        $objresponse->data= "No Existe Usuario.";
        
        return$data = $objresponse;
    
    }
    
    
    
    }




}







?>