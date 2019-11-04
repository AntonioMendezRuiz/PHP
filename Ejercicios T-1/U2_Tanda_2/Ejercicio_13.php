<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 13</title>
</head>
<body>
    <form action="Ejercicio_13.php" method ="post">
        <input type="number" name="num1"><br>
        <input type="number" name="num2"><br>
        <input type="number" name="num3"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Escribe un programa que ordene tres números enteros introducidos por teclado.
    $ordena = [$_POST["num1"], $_POST["num2"], $_POST["num3"]];
    sort($ordena);
    echo "[" . $ordena[0] . ", " .$ordena[1] . ", " .$ordena[2] . "]";
    ?>
</body>
</html>