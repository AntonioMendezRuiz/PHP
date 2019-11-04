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
        Base <input type="number" name="num1"><br>
        Exponente <input type="number" name="num2"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
        //Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia.
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $res = 1;
        for($i = 0; $i < $num2; $i++){
            $res *= $num1;
        }
        echo "El resultado es ". $res;
    ?>
</body>
</html>