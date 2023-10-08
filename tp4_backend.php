<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1> Ejercicio 1 </h1>
    <?php
    $numerospares = [2,4,6,8,10];
    foreach ($numerospares as $valor) {
      print "<p>$valor</p>\n";
    }
    ?>

    <h1> Ejercicio 2 </h1>

    <?php
    $datos = ["Pedro", "Ana", 34, 1];
    print "<pre>\n";
    print_r ($datos);
    ?>

    <h1> Ejercicio 3 </h1>
    <?php
    $personas = [
      "nombre" => "Pedro",
      "apellido" => "Torres",
      "direccion" => "Av. Mayor 3703",
      "telefono" => 1122334455,
    ];
    print $personas ["direccion"];
    ?>

    <h1> Ejercicio 4 </h1>
    <?php
    $ciudades = [ "Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];
    foreach ($ciudades as $indice => $valor) {
      print "<p>La ciudad con el indice $indice tiene el nombre $valor </p>\n";
    }
    ?>

    <h1> Ejercicio 5 </h1>

    <?php
    $lugares = [
      "MD" => "Madrid",
      "BCL" => "Barcelona",
      "LD" => "Londres",
      "NY" => "New York",
      "LA" => "Los Angeles",
      "CCG" => "Chicago",
    ];
    foreach ($lugares as $indice => $valor) {
      print "<p> El indice de $valor es $indice </p>\n";
    }
     ?>

  </body>
</html>
