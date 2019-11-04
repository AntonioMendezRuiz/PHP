<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 9</title>
</head>
<body>
<p>Introduce los valores a, b y c para resolver la ecuación:</p>
    <form action="Ejercicio_9.php" method ="post">
        a <input type="number" name="a"><br>
        b <input type="number" name="b"><br>
        c <input type="number" name="c"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax2 + bx + c = 0).
    $x = $_POST["a"];
    $y = $_POST["b"];
    $z = $_POST["c"];

    echo "La solución de la ecuacion es ". (-$y+sqrt(($y*$y)-(4*$a*$z)))/(2*$x). " y " .(-$y-sqrt(($y*$y)-(4*$a*$z)))/(2*$x);
    ?>
    
    
</body>
</html>