<?php

require "Course.php";

$course = new Course(
    title: "Curso profesional de PHP y Laravel",
    subtitle: "Aprende PHP y Laravel desde cero paa'",
    description: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, inventore! Dolore minima voluptatibus blanditiis, sapiente placeat repellendus, temporibus nihil consectetur at quam quasi ea est maiores, ipsa provident. Adipisci, quaerat.",
    tags: ["PHP", "Laravel", "JavaScript", "HTML", "CSS"]
);

$course->addTag("Frameworks");
$course->addTag("Web Development");
$course->addTag("AI");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->getTitle() ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course->getSubtitle() ?></h1>

    <p><?= $course->getDescription() ?></p>

    <strong>Etiquetas: </strong>
    <ul>
        <?php foreach ($course->getTags() as $tag): ?>
                <li><?= $tag ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>