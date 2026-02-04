<?php


require("vendor/autoload.php");


use PHPMailer\PHPMailer\PHPMailer;




function sendMail($name, $email, $mensaje, $html = false) {
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'c4e9ca30dc4d97';
    $phpmailer->Password = 'ad8cb3f4539697';


    $phpmailer->setFrom('mark@facebook.com', 'Mark Zuckerberg');
    $phpmailer->addAddress("jossadev8@gmail.com", "Josafath Cerón"); 

    // Definiendo el contenido de mi email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = "Esto es una prueba";
    $phpmailer->Body    = "Que pedo raza";

    // Mandar el correo
    $phpmailer->send();
}

?>