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
        <input type="number" name="num1"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado.
    $str = strval($_POST["num1"]);
    $arr = str_split($str);

    echo $arr[count($arr) - 1];

    ?>
</body>
</html>