<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 25</title>
</head>
<body>
    <form action="Ejercicio_25.php" method="post">
          <input type="number" name="n" min="0" autofocus="" required=""><br>
          <input type="submit" value="Aceptar">
    </form>
      
    <?php
     //Realiza un programa que pida un número por teclado y que luego muestre ese número al revés.
        if (!isset($_POST['n'])){
    ?>
        Por favor, introduzca un número entero:
        <form action="25.php" method="post">
          <input type="number" name="n" min="0" autofocus="" required=""><br>
          <input type="submit" value="Aceptar">
        </form>
    <?php
        } else {
          $n = $_POST['n'];
          $volteado = 0;

          $numero = $n;
          while ($numero > 0) {
            $volteado = ($volteado * 10) + ($numero % 10);
            $numero = floor($numero / 10);
          } // while

          echo "Si le damos la vuelta al $n tenemos el $volteado";
        }
    ?>

</body>
</html>