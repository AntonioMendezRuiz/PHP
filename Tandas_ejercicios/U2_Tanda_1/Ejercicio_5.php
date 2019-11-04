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
        Altura<input type="text" name="altura"><br>
        Base  <input type="text" name="base">
        <input type="submit" value="calcular">
    </form>
    <?php
        //Escribe un programa que calcule el área de un rectángulo.
        echo 'El area del rectangulo es '. ($_POST['altura']*$_POST['base']).' cm cuadrados.';
    ?>
</body>
</html>