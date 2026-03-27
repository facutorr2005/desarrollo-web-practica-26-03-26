<?php

/* $nombre = "Facundo". "<br>";

echo $nombre;

$edad = 20;

if ($edad >= 18) {
    echo "Eres mayor de edad." . "<br>";
} else {
    echo "Eres menor de edad.". "<br>";
}

$nombres = ["Sacha", "Guadalupe", "Thiago", "Sofía", "Ezequiel"];

for ($i = 0; $i < count($nombres); $i++) {
    echo $nombres[$i] . "<br>";
}

foreach ($nombres as $n) {
    echo $n . "<br>";
}

var_dump($nombres);
*/

if (isset($_GET['enviar'])) {
    echo "Hola, " . $_GET['nombre'] . "!";
}