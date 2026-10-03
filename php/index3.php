<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 5</title>
</head>
<body>
    <?php



echo "<h1> EJERCICIO 5 </h1>";


$base = 10;
$altura = 20;

$perimetro = 2 * ($base + $altura);
$superficie = $base * $altura;

print "<p> Construya un programa tal que dado como datos la base y la altura de un rectángulo, calcule el perímetro y la superficie del mismo.
Recuerde que la superficie de un rectángulo se calcula aplicando la siguiente fórmula: <br>
Superficie = base * altura
, y el perímetro
se calcula como:
Perímetro = 2*(base + altura).<br></p>";

print "<strong>Sabiendo que <br> base = 10 <br> altura = 20</strong>";
print "<hr>";
print "<hr>";

print "<h3> La superficie de su triangulo es de $superficie</h3>";
print "<hr>"; 
print "<hr>";
print "<h3> El perimetro de su triangulo es de $perimetro </h3>";


print"<hr>";
print"<hr>";

    ?>
</body>
</html>