<?php

echo "<pre>";
echo isset($_POST["nombre"]);
/* if (isset($_POST["nombre"])) {
    echo "Hola " . $_POST['nombre'] . "!";
} else {
    echo "No mandaste nada wey!!";
} */

if ( isset($_POST["form"]) ) {
    echo "Todo el formulario fue mandado";
}
else {
    echo "No se mando ningun formulario";
}
var_dump($_POST["personas"]);
print_r($_POST["persona"]);
var_dump($_POST["list1"]);
var_dump($_POST["list2"]);
var_dump($_POST["list3"]);
var_dump($_POST["pais"]);
var_dump($_FILES["galeria"]);
echo "</pre>";