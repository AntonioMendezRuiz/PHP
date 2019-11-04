<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 21</title>
</head>
<body>
    <?php
        //Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo
        //y nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares.
        //El número negativo sólo se utiliza para indicar
        //el final de la introducción de datos pero no se incluye en el cómputo.

        if (!isset($_POST['n'])) {
            $n = 0;
            $cuentaNumeros = 0;
            $sumaImpares = 0;
            $cuentaImpares = 0;
            $mayorPar = -PHP_INT_MAX;
          } else {
            $n = $_POST['n'];
            $cuentaNumeros = $_POST['cuentaNumeros'];
            $sumaImpares = $_POST['sumaImpares'];
            $cuentaImpares = $_POST['cuentaImpares'];
            $mayorPar = $_POST['mayorPar'];
          }

          if ($n > 0) {
            $cuentaNumeros++;
            if ($n % 2 == 0) {
              if ($n > $mayorPar) {
                $mayorPar = $n;
              }
            } else {
                $cuentaImpares++;
                $sumaImpares += $n;
            }
          }
          if (!isset($_POST['n']) || ($n > 0)) {
          ?>
            Introduzca un número. Si quiere terminar, introduzca un número negativo.<br>
            <form action="Ejercicio_21.php" method="post">
              <input type="number" name="n" autofocus=""><br>
              <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
              <input type="hidden" name="sumaImpares" value="<?php echo $sumaImpares; ?>">
              <input type="hidden" name="cuentaImpares" value="<?php echo $cuentaImpares; ?>">
              <input type="hidden" name="mayorPar" value="<?php echo $mayorPar; ?>">
              <input type="submit" value="Aceptar">
            </form>
          <?php
          }

          if ($n < 0) {
            echo "Se han introducido $cuentaNumeros números <br>";
            if ($cuentaImpares != 0){
              echo "La media de los impares es ".($sumaImpares / $cuentaImpares);
            } else {
              echo "Habían 0 impares";
            }
            echo "<br>";
            if ($mayorPar == -PHP_INT_MAX){
              echo "No hay mayor par";
            } else {
              echo "El mayor de los pares es $mayorPar<br>";
            }
          }
    ?>
</body>
</html>