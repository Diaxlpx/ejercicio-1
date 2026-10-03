<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 9 </title>
</head>
<body>
<?php

print"<h1>EJERCICIO 9</h1>";

print"<p>Construya un programa que resuelva el problema que tienen en una gasolinera. Los surtidores de la misma registran lo que “surten”
en galones, pero el precio de la gasolina está fijado en litros. El programa debe calcular e imprimir lo que hay que cobrarle al cliente. Se
debe considerar que cada galón tiene 3.785 litros y el precio del litro es $4.50.
</p>";

print"<hr>";
print"<hr>";

$CANTIDAD_GALONES = 10;
$LITRO_POR_GALON = 3.785;
$PRECIO_LITRO = 4.50;

$LITRO_TOTAL = $CANTIDAD_GALONES * $LITRO_POR_GALON;
$COBRO_CLIENT = $LITRO_TOTAL * $PRECIO_LITRO;

print"<h3>Lo que se le debe cobrar al cliente es $COBRO_CLIENT</h3>";
print"<hr>";
print"<hr>";

?>
    
</body>
</html>