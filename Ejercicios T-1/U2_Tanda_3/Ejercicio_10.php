<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
    //Escribe un programa que calcule la media de un conjunto de números positivos 
    //introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. 
    //El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo.
    ?>
    <?php
    if (!isset($_POST['n'])) {
      $n = 0;
      $total = 0;
      $cuentaNumeros = 0;
    } else {
      $n = $_POST['n'];
      $total = $_POST['total'];
      $cuentaNumeros = $_POST['cuentaNumeros'];
    }
    if ($n >= 0) {
        $total += $n;
        $cuentaNumeros++;
        ?>
        <form action="Ejercicio_10.php" method="post">
          <input type="number" name="n" autofocus>
        <input type="hidden" name="total" value="<?php echo $total; ?>">
        <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
        <input type="submit" value="Aceptar">
        </form>
      <?php
      } else {
      ?>
        <br><br>La media de los números introducidos es <?php echo $total / ($cuentaNumeros - 1); ?>
        <br><br>
      <?php
      }
    ?>
    
    
</body>
</html>