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
        <input type="text" name="base">
        <input type="submit" value="calcular">
    </form>
    <?php
        //Escribe un programa que calcule el total de una factura a partir de la base imponible.
        $x = $_POST['base'];
        $iva = 0.21;
        $calculo = $x * $iva;

        echo 'El total de la factura es '.($x + $calculo).' euros.';
    ?>
</body>
</html>