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
    <title><?= $course->title ?></title>
</head>
<body>
    <?= $course ?>
</body>
</html>