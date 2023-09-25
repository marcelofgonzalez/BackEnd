<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Trabajo Practico 2</h1>

    <?php

     $a =12;

     if ($a>0) {
         echo "1)- a es positivo";
         echo "<br>";
      } elseif ($a = 0) {
          echo "1)- No se cumple condicion";
          echo "<br>";
      } else {
           echo "1)- No se cumple condicion";
           echo "<br>";
      }

      if ($a>=1 & $a<10) {
        echo "2)- a esta entre 1 y 10";
        echo "<br>";
      }

      if ($a > 10 || $a < 2) {
        echo "3)- a es mayor a 10 o menor a 2";
        echo "<br>";
      }
      $numero1 = 10;
      $numero2 = 10;

      if ($numero1 > $numero2) {
         $resta = $numero1-$numero2;
         $suma = $numero1 + $numero2;
         echo "4) Resta = $resta";
         echo "<br>";
         echo "4) Suma = $suma";
      } elseif ($numero1< $numero2) {
        $multiplicacion = $numero1 * $numero2;
        $division = $numero2 / $numero1;
        $resto = $numero2 % $numero1;
        echo "4) Multiplicacion = $multiplicacion";
        echo "<br>";
        echo "4) Division = $division";
        echo "<br>";
        echo "4) Resto = $resto";
      } else {
        echo "4) Los numeros ingresados son iguales";
      }

     ?>

  </body>
</html>
