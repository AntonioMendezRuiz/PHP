<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 12</title>
</head>
<body>
    <form action="Ejercicio_12.php" method ="post">
        <input type="number" name="num1"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. 
    //El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula 
    //sumando los dos anteriores, por lo que tendríamos que los términos 
    //son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144... El número n se debe introducir por teclado.

    $num = $_POST["num1"];
    $arr = array(0 , 1);
    for ($i = 2; $i <= $num; $i++){
        array_push($arr, $arr[$i - 1] + $arr[$i - 2]);
    }
    for ($i = 0; $i <= $num; $i++){
        echo $arr[$i] . " ";
    }
    ?>
</body>
</html>