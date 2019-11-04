<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 23</title>
</head>
<body>
    <?php
    //Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la suma de ellos supere el valor 10000. 
    //Cuando esto último ocurra, se debe mostrar el total acumulado, el contador de los números introducidos y la media.
    if (!isset($_POST['n'])) {
        $n = 0;
        $suma = 0;
        $numeroDeElementos = -1;
      } else {
        $n = $_POST['n'];
        $suma = $_POST['suma'];
        $numeroDeElementos = $_POST['numeroDeElementos'];
      }

      if ($suma < 10000) {
        $suma += $n;
        $numeroDeElementos++;
      }

      if ((!isset($_POST['n'])) || ($suma < 10000)) {
      ?>
        Introduzca un número. El programa seguirá pidiendo números mientras la suma de ellos sea inferior a 10000.<br>
        <form action="Ejercicio_23.php" method="post">
          <input type="number" name="n" autofocus=""><br>
          <input type="hidden" name="numeroDeElementos" value="<?php echo $numeroDeElementos; ?>">
          <input type="hidden" name="suma" value="<?php echo $suma; ?>">
          <input type="submit" value="Aceptar">
        </form>
      <?php
      }

      if ($suma >= 10000) {
        echo "Ha introducido un total de $numeroDeElementos números.<br>";
        echo "La suma total es $suma<br>";
        echo "La media es ".($suma/$numeroDeElementos);
      }
    ?>
</body>
</html>