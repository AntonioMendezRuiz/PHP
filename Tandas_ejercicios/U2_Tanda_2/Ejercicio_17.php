<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 17</title>
</head>
<body>
    <form action="Ejercicio_17.php" method ="post">
        <input type="number" name="num1" max = "99999" min ="-99999"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Escribe un programa que diga cuál es la primera cifra de un número 
    //entero introducido por teclado. Se permiten números de hasta 5 cifras.
    if($_POST["num1"] > 0){
    $str = strval($_POST["num1"]);
    $arr = str_split($str);

    echo $arr[0];
    }
    else{
        $str = strval($_POST["num1"]);
        $arr = str_split($str);
    
        echo $arr[1]; 
    }
    ?>
</body>
</html>