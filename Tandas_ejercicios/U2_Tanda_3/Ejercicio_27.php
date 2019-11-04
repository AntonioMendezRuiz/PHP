<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 27</title>
</head>
<body>
    <?php
    //Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1 y un número leído por teclado.
    if (!isset($_POST['n'])){
        ?>
          Introduzca un número entero mayor que 1:
          <form action="Ejercicio_27.php" method="post">
            <input type="number" name="n" min="1" autofocus="" required=""><br>
            <input type="submit" value="Aceptar">
          </form>
        <?php
        } else {
          $n = $_POST['n'];
          $cuenta = 0;
          $suma = 0;

          for ($i = 1; $i <= $n; $i++) {
            if (($i % 3) == 0) {
              echo "$i&nbsp;&nbsp;&nbsp;";
              $cuenta++;
              $suma += $i;
            }
          }
          echo "<br>Desde 1 hasta $n hay $cuenta múltiplos de 3 y suman $suma.";
        } 
    ?>
</body>
</html>