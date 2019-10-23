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
        <input type="number" name="num1" max = "99999" min ="-99999"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Realiza un programa que nos diga cuántos dígitos tiene un número entero 
    //que puede ser positivo o negativo. Se permiten números de hasta 5 dígitos.
    if($_POST["num1"] > 0){
        $str = strval($_POST["num1"]);
        $arr = str_split($str);

        echo count($arr);
    }
    else{
        $str = strval($_POST["num1"]);
        $arr = str_split($str);
    
        echo count($arr) - 1; 
    }
    ?>
</body>
</html>