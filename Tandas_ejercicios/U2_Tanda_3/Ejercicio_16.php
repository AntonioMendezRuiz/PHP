<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 16</title>
</head>
<body>
    <form action="Ejercicio_16.php" method ="post">
        <input type="number" name="num1" min = "0"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
        //Escribe un programa que diga si un número introducido por teclado es o no primo. 
        //Un número primo es aquel que sólo es divisible entre él mismo y la unidad.
        $n = $_POST["num1"];
        if (($n == 0) || ($n == 1)) {
            $esPrimo = false;
        }else{
            $esPrimo = true;
            for ($i = 2; $i <= $n/2; $i++) {
              if ($n % $i == 0) {
                $esPrimo = false;
              }
            }
        }
        if ($esPrimo) {
            echo "El $n es primo.";
        } else {
            echo "El $n no es primo.";
        }
    ?>
</body>
</html>