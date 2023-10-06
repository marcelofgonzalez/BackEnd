<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1> Ejercicio 1</h1>
  <?php
  $i=1;
  while ($i <= 100) {
    print "<p> $i </p>\n";
    $i++;
  }
  ?>
  <h1>Ejercicio 2</h1>
  <?php

  for ($i=100; $i >= 1; $i--) {
    print "<p> $i </p>\n";
  }
  ?>
  <h1> Ejercicio 3</h1>
  <?php
  $a = 1;
  $b = 2;
  while ($a <= 100) {
    $c = $a % $b;
    if ($c == 0) {
      print "<p> $a </p>\n";
    }
    $a++;
  }
  ?>
  <h1>Ejercicio 4</h1>
  <?php
  $d=1;
  $g = 2;
  while ($d <= 100) {
    $h = $d % $g;
    if ( $h != 0) {
      print "<p> $d </p>\n";
    }
    $d++;
  }

  ?>
  <h1>Ejercicio 5</h1>
  <?php
  $i=0;
  $b=0;
  while ($i <= 20) {
    $b = $b + $i;
    $i++;
  }
  print " Total =$b";

  ?>

  <h1>Ejercicio 6</h1>

  <?php
  $a = 0;
  $b = 2;
  $d = 0;
  while ($a <= 20) {
    $c = $a % $b;
    if ($c == 0) {
      $d = $d + $a;
    }
    $a++;
  }
  print " Total = $d";
  ?>





</body>
</html>
