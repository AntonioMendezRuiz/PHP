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
        Numero de horas trabajadas <input type="text" name="salario"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Escribe un programa que calcule el salario semanal de un trabajador en base a las horas 
    //trabajadas. Se pagarán 12 euros por hora. Recogida de datos por teclado mediante formularios
    $x = $_POST['salario'];
    $y = 12;
    $salarioTotal = $x*$y;
    echo "El salario del trabajador es de ". $salarioTotal;
    ?>
</body>
</html>