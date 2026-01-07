<?php

$course = "Curso profesional de PHP y Laravel";
$archived = true;
$status = $archived ? "archivado" : "activo";
$nivel_curso = 2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course ?></h1>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, inventore! Dolore minima voluptatibus blanditiis, sapiente placeat repellendus, temporibus nihil consectetur at quam quasi ea est maiores, ipsa provident. Adipisci, quaerat.</p>
    
    <p>
        Este curso está <?= $status ?>
    </p>

    <p>Nivel del curso:<?php
    if ($nivel_curso == 1) {
        echo "\n";
        echo "El nivel del curso es 1";
    } else {
        echo "El nivel del curso es más complicado así que abusado";
    }
    ?>  </p>
</body>
</html>