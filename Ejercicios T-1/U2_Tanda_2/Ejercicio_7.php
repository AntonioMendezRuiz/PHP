<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7</title>
</head>
<body>
    <form action="Ejercicio_7.php" method ="post">
        Nota 1 <input type="number" name="nota1" min = "0" max = "10"><br>
        Nota 2 <input type="number" name="nota2" min = "0" max = "10"><br>
        Nota 3 <input type="number" name="nota3" min = "0" max = "10"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Realiza un programa que calcule la media de tres notas.
    $x = $_POST["nota1"];
    $y = $_POST["nota2"];
    $z = $_POST["nota3"];
    echo "La media de las 3 notas es ". ($x+$y+$z)/3;
    ?>
</body>
</html>