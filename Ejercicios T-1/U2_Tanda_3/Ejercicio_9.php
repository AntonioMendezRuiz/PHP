<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 9</title>
</head>
<body>
    <form action="Ejercicio_9.php" method ="post">
        <input type="number" name="num1"><br>
        <input type="submit" value="calcular">
    </form>
    <?php   
        //Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.
        $str = strval($_POST["num1"]);
        $arr = str_split($str);

        echo "El número de cifras es ". count($arr);
    ?>
</body>
</html>