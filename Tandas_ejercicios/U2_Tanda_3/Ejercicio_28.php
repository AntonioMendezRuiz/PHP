<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 28</title>
</head>
<body>
        <form action="Ejercicio_28.php" method="post">
            <input type="number" name="n" min="1" autofocus="" required=""><br>
            <input type="submit" value="Aceptar">
        </form>
    <?php
    //Escribe un programa que calcule el factorial de un número entero leído por teclado.
    $n = $_POST["n"];
    $factorial = 1;
    for($i = 1; $i <= $n; $i++){
        $factorial = $factorial*$i;
    }
    echo "El factorial de " . $n . " es " . $factorial . ".";
    ?>
</body>
</html>