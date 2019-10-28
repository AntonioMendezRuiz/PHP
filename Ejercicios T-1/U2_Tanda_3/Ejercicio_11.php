<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 11</title>
</head>
<body>
    <form action="Ejercicio_11.php" method ="post">
        <input type="number" name="num1"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
        //Escribe un programa que muestre en tres columnas, el cuadrado y 
        //el cubo de los 5 primeros números enteros a partir de uno que se introduce por teclado.

        $num = $_POST["num1"];
        echo "<table>";
        for ($i = $num; $i <= $num + 5; $i++){
            echo "<tr>";
            echo 
            "<td>". $i ."</td>

            <td>". $i * $i ."</td>
    
            <td>". $i * $i * $i ."</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>