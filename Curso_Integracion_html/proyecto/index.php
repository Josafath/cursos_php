<?php

require("mail.php");

function validate($nombre, $mensaje, $edad, $correo, $form) {
    return !empty($nombre) && !empty($mensaje) && !empty($edad)  && !empty($correo); 
}

$status = "";

if ( isset($_POST["form"])) {
    if (validate(...$_POST)) {
        $name = $_POST["nombre"];
        $mensaje = $_POST["mensaje"];
        $edad = $_POST["edad"];
        $email = $_POST["correo"];

        sendMail($name, $mensaje, $email);
        $status = "success";
    } else {
        $status = "danger";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario de contacto</title>
</head>
<body>
    <div class="container">
    <div class="formulario-form">

        <?php if($status == "danger"):  ?>
            <div class="alert-danger">
                <span>Surgió un problema</span>
            </div>
        <?php endif; ?>
        
        <?php if($status == "success"):  ?>
            <div class="alert-success">
                <span>¡Mensaje enviado con éxito!</span>
            </div>
        <?php endif; ?>

        <form action="./index.php" method="POST">
        <div class="nombre-field">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </div>

        <div class="apellido-field">
            <label for="mensaje">Mensaje:</label>
            <input type="text" name="mensaje" id="apellido-field">
        </div>

        <div class="edad-field">
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad-field">
        </div>

        <div class="correo-field">
            <label for="correo">Email:</label>
            <input type="email" name="correo" id="correo-field">
        </div>

        <div class="">
            <button type="submit" class="button-17" name="form">Mandar Formulario </button>
        </div>
        </form>
    </div>
    </div>
</body>
</html>