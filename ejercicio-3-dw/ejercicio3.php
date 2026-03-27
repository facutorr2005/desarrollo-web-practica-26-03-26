<?php

$productos = ["Laptop", "Mouse", "Teclado", "Monitor"];
    echo "<ul>" . "Productos:";
foreach ($productos as $p){
    echo "<li>" . $p . "</li>";
}
    echo "</ul>";