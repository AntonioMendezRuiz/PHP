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
        <input type="number" name="num1" min = "0"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
        //Realiza un programa que sume los 100 números siguientes a un número entero y positivo 
        //introducido por teclado.
        //Se debe comprobar que el dato introducido es correcto (que es un número positivo).
        $num1 = $_POST["num1"];
        $res = 0;
        for($i = $num1; $i < $num1 + 100; $i++){
            $res  += $i;
        }
        echo $res;
    ?>
</body>
</html>