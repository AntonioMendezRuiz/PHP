<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 15</title>
</head>
<body>
    <form action="Ejercicio_15.php" method ="post">
        Base <input type="number" name="num1"><br>
        Exponente <input type="number" name="num2"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
        //Escribe un programa que dados dos números, uno real (base) y un entero positivo 
        //(exponente), saque por pantalla todas las potencias con base el numero dado y exponentes
        //entre uno y el exponente introducido. No se deben utilizar funciones de exponenciación. 
        //Por ejemplo, si introducimos el 2 y el 5, se deberán mostrar 21, 22, 23, 24, 25.
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        for($i = 1; $i <= $num2; $i++){
            echo $num1. "^" . $i . "<br>";
        }
    ?>
</body>
</html>