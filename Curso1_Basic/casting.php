<?php


$numerito = "5";
var_dump( $numerito );
$numerito = (int) $numerito;
var_dump( $numerito );

echo "\n";


$dias = 5.89;
var_dump( $dias );
$dias = (int) $dias;
var_dump( $dias );

echo "\n";

$numero_preguntas = 5 + "5";
$numero_respuestas = "5" + 5;

var_dump($numero_preguntas);
var_dump($numero_respuestas);
echo "\n";

$promedio_maximo = $numero_respuestas / 1.0;
var_dump($promedio_maximo);

$michis = 3 + "5 michis";