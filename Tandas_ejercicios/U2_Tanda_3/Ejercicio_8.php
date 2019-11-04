<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
</head>
<body>
    <form action="Ejercicio_8.php" method ="post">
        <input type="number" name="num1" max = "100" min ="1"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Muestra la tabla de multiplicar de un número 
    //introducido por teclado. El resultado se debe mostrar en una tabla (<table> en HTML).
    $num = $_POST["num1"];
    echo "<table>";
    for($i = 0; $i <= 10; $i++){
        echo "<tr>";
        echo 
        "<td>". $num ."</td>

        <td> x </td>
    
        <td>". $i ."</td>

        <td> = </td>
        <td>". $num * $i ."</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>