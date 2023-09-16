<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>TRABAJO PRACTICO 1</h1>
    <?php
    $saludo = "Hola Mundo";
    echo $saludo;
    echo "<br>"; //* Esto es un salto de linea

    $valor1 = 20;
    $valor2 = 16;
    $suma = $valor1 + $valor2;
    echo "suma =$suma";
    echo "<br>";

    $resta = $valor1 - $valor2;
    echo "resta= $resta";
    echo "<br>";

    $multiplicacion = $valor1 * $valor2;
    echo "multiplicacion = $multiplicacion";
    echo "<br>";

    $division = $valor1 / $valor2;
    echo "division = $division";
    echo "<br>";

    $resto = $valor1 % $valor2;
    echo "resto = $resto";
    echo "<br>";

    $celsius = 27;
    $celfahr = $celsius * (9/5) + 32;
    echo "Fahrenheit = $celfahr";
    echo "<br>";

    $base = 18;
    $altura = 12;
    $perimetrorectangulo= (2*$base)+(2*$altura);
    echo "Perimetro de un rectangulo = $perimetrorectangulo";
    echo "<br>";

    $arearectangulo = $base * $altura;
    echo "Area de un rectangulo = $arearectangulo";
    echo "<br>";

    $pi = 3.1416;
    $radio = 30;
    $perimetrocirculo = 2*$pi*$radio;
    echo "Perimetro de un circulo = $perimetrocirculo";
    echo "<br>";

    $areacirculo = $pi * $radio * $radio;
    echo "Area de un circulo = $areacirculo";
    
     ?>

  </body>
</html>
