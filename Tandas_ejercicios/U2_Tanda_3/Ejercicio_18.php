<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 18</title>
</head>
<body>
<form action="Ejercicio_18.php" method ="post">
        <input type="number" name="num1"><br>
        <input type="number" name="num2"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Escribe un programa que obtenga los números enteros comprendidos 
    //entre dos números introducidos por teclado y validados como distintos, 
    //el programa debe empezar por el menor de los enteros introducidos e ir incrementando de 7 en 7.
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    while($num1 + 7 < $num2){
        $num1 += 7;
        echo $num1 . "<br>";
    }
    ?>
</body>
</html>