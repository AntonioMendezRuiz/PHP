<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 14</title>
</head>
<body>
    <form action="Ejercicio_14.php" method ="post">
        <input type="number" name="num1"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5.
    $numero = $_POST["num1"];

    if($numero % 2 == 0 && $numero % 5 == 0){
        echo "El número es par y divisible entre 5.";
    }
    elseif($numero % 2 == 0 && !$numero % 5 == 0){
        echo "El número es par pero no divisible entre 5.";
    }
    elseif (!$numero % 2 == 0 && $numero % 5 == 0) {
        echo "El número no es par pero si divisible entre 5.";
    }
    else{
        echo "El número no es par ni divisible entre 5.";
    }
    ?>
</body>
</html>