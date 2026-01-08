<?php

class Course {
    public $title;
    public $subtitle;
    public $description;
    public $tags;


    public function __construct($title, $subtitle,$description,$tags) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->tags = $tags;
    }
        
}

$course = new Course(
    title: "Curso profesional de PHP y Laravel",
    subtitle: "Aprende PHP y Laravel desde cero",
    description: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, inventore! Dolore minima voluptatibus blanditiis, sapiente placeat repellendus, temporibus nihil consectetur at quam quasi ea est maiores, ipsa provident. Adipisci, quaerat.",
    tags: ["PHP", "Laravel", "JavaScript", "HTML", "CSS"]
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->title ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course->subtitle ?></h1>

    <p><?= $course->description ?></p>

    <strong>Etiquetas: </strong>
    <ul>
        <?php foreach ($course->tags as $tag): ?>
                <li><?= $tag ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>