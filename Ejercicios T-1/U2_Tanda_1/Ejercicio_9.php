<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 9</title>
</head>
<body>
    <form action="Ejercicio_9.php" method ="post">
        Radio<input type="text" name="radio">
        Altura<input type="text" name="altura">
        <input type="submit" value="Calcular">
    </form>
    <?php
        //Escribe un programa que calcule el volumen de un cono mediante la fórmula V = (1/3)*(π*r^2*h).
        $r = $_POST['radio'];
        $h = $_POST['altura'];
        $v = (M_PI * ($r*$r)*$h)/3;
        echo "El volumen del cono es ". $v ." cm<sup>3</sup>"
    ?>
</body>
</html>