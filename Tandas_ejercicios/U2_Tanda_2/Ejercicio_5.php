<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
</head>
<body>
    <form action="Ejercicio_5.php" method ="post">
        <p>ax + b = 0</p>
        a<input type="number" name="a"><br>
        b<input type="number" name="b"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0).
    $x = $_POST["a"];
    $y = $_POST["b"];

    echo "El valor de x es " . -($y/$x);
    ?>
</body>
</html>