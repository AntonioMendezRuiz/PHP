<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 19</title>
</head>
<body>
    <form action="Ejercicio_19.php" method ="post">
        <input type="number" name="num1" max = "99999" min ="-99999"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Realiza un programa que diga si un número entero 
    //positivo introducido por teclado es capicúa. Se permiten números de hasta 5 cifras.
    if($_POST["num1"] > 0){
        $str = strval($_POST["num1"]);
        $arr = str_split($str);
        $arrR = array_reverse($arr);
        if($arr == $arrR){
            echo "El número es capicúa.";
        }
        else{
            echo "El número no es capicúa.";
        }
    }
    else{
        $str = strval($_POST["num1"]);
        $arr = str_split($str);
        $arr[count($arr)] = "-";
        $arrR = array_reverse($arr);

        if($arr == $arrR){
            echo "El número es capicúa.";
        }
        else{
            echo "El número no es capicúa.";
        }
    }
    ?>
</body>
</html>